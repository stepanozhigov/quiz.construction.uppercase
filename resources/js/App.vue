<template>
	<div>
		<Nav />
		<Home />
		<HeaderTitles />
		<Content />
		<Control />
		<notifications group="alert" position="bottom right" />

		<Modal v-if="$store.state.isCallBack" @close="$store.dispatch('callBack')">
			<div v-if="!isCallBackSend" slot="content">
				<p class="modal_title" v-html="$ml.get('callBack')" />
				<p class="modal_intro" v-html="$ml.get('modal_intro')" />

				<phone-mask-input
					v-model="phoneCallback"
					autoDetectCountry
					showFlag
					wrapperClass="input_wrapper"
					inputClass="modal_input input"
					flagClass="input_flag"
					@onValidate="validPhone"
				/>
				<button
					class="btn modal_btn"
					@click="submitCallBack"
					v-text="$ml.get('send')"
				/>
				<p class="alarm" v-html="$ml.get('alarm')" />
			</div>
			<div v-else slot="content">
				<p
					class="modal_title modal_title_send"
					v-html="$ml.get('title_send')"
				/>
				<a
					:href="siteUrl"
					class="btn btn_next modal_btn"
					v-text="$ml.get('site_link')"
				/>
			</div>
		</Modal>
	</div>
</template>

<script>
	import Nav from "./components/Nav.vue";
	import Home from "./components/Home.vue";
	import HeaderTitles from "./components/HeaderTitles.vue";
	import Content from "./components/Content.vue";
	import Control from "./components/Control.vue";
	import Modal from "./components/Modal.vue";

	import PhoneMaskInput from "vue-phone-mask-input";
	import axios from "axios";
	import { mapActions, mapGetters } from "vuex";

	export default {
		name: "App",
		data: function () {
			return {
				phoneCallback: "",
				isCallBackSend: false,
				isValidPhone: false,
			};
		},
		props: {
			lang: {
				type: String,
				default: "ru",
			},
			utm: {
				type: Object,
			},
		},
		created() {
			this.setUtm(this.utm);
			window.addEventListener("resize", this.$store.dispatch("handleResize"));
			this.$store.dispatch("handleResize");
		},
		destroyed() {
			window.removeEventListener("resize", this.$store.dispatch("handleResize"));
		},
		methods: {
			...mapActions(["setUtm"]),
			validPhone(e) {
				if (e.isValidByLibPhoneNumberJs) this.isValidPhone = true;
				else this.isValidPhone = false;
			},
			submitCallBack(e) {
				e.preventDefault();

				if (this.isValidPhone) {
					ga.getAll()[0].send("event", "callback-licensing", "send");
					window.ym(62231704, "reachGoal", "quiz-callback-licensing");

					axios
						.post("/leads", {
							phone: this.phoneCallback,
							tag: "Лицензирование - Обратный звонок",
							utm: this.utm,
						})
						.then((response) => {
							this.isCallBackSend = true;
						});
				} else
					this.$notify({
						group: "alert",
						type: "error",
						text: this.$ml.get("alert_phone"),
					});
			},
		},
		components: {
			Nav,
			Home,
			HeaderTitles,
			Content,
			Control,
			Modal,
			PhoneMaskInput,
		},
	};
</script>