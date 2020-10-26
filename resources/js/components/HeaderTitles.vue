<template>
    <section class="questHeader" v-if="step >= 1 && step <= 15">
        <div class="questHeader__wrapper">
            <div class="questHeader__items">
                <span class="questHeader_close close" @click="$store.state.step = 0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 18 18">
                        <path fill="none" stroke="#898886" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="1.5" d="M1 1l16 16"/>
                        <path fill="none" stroke="#898886" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="20" stroke-width="1.5" d="M17 1L1 17"/>
                    </svg>
                </span>

                <div class="questHeader__items_item" v-if="questions.quest_1.quest_2 === '1 категории'">
                    <div class="questHeader_step" v-if="step === 1">Вопрос 1</div>
                    <div class="questHeader_step" v-if="step === 2">Вопрос 2</div>
                    <div class="questHeader_step" v-if="step === 3">Вопрос 3</div>
                    <div class="questHeader_step" v-if="step === 4">Вопрос 4</div>
                    <div class="questHeader_step" v-if="step === 5">Вопрос 5</div>
                    <div class="questHeader_step" v-if="step === 6">Вопрос 6</div>
                    <div v-if="questions.quest_2 === 'Резидент Казахстана'">
                        <div class="questHeader_step" v-if="step === 7">подарок!</div>
                        <div class="questHeader_step" v-if="step === 8">контакты</div>
                    </div>
                    <div v-else>
                        <div class="questHeader_step" v-if="step === 7">Вопрос 7</div>
                        <div class="questHeader_step" v-if="step === 8">подарок!</div>
                        <div class="questHeader_step" v-if="step === 9">контакты</div>
                    </div>
                    <!-- //-----------------// -->
                    <div class="questHeader_title" v-if="step === 1">Какая лицензия вам необходима?</div>
                    <div class="questHeader_title" v-if="step === 2">Информация о заявителе</div>

                    <div v-if="questions.quest_2 === 'Резидент Казахстана'">
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 === 'Cтроительная'">Наличие производственной базы на праве собственности</div>
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 !== 'Cтроительная'">Наличие офиса в долгосрочной аренде</div>
                        <div class="questHeader_title" v-if="step === 7">Закажи услугу и получи «Справочник определения категорий объектов»</div>
                        <div class="questHeader_title" v-if="step === 8">Заказать лицензирование строительной деятельности</div>
                    </div>
                    <div v-else>
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 === 'Cтроительная'">Производственная база в собственности в стране резидентства или другой стране</div>
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 !== 'Cтроительная'">Наличие офиса в долгосрочной аренде в Казахстане</div>
                        <div class="questHeader_title" v-if="step === 7">Планируете ли регистрировать филиал на территории Казахстана</div>
                        <div class="questHeader_title" v-if="step === 8">Закажи услугу и получи «Справочник определения категорий объектов»</div>
                        <div class="questHeader_title" v-if="step === 9">Заказать лицензирование строительной деятельности</div>
                    </div>
                    <div class="questHeader_title" v-if="step === 4">Наличие квалифицированного состава ИТР, подлежащих аттестации</div>
                    <div class="questHeader_title" v-if="step === 5">Наличие документа подтверждающего получение лицензии 10 и более лет назад</div>
                    <div class="questHeader_title" v-if="step === 6">Документы подтверждающие опыт по реализации работ на объектах</div>
                    
                </div>

                <div class="questHeader__items_item" v-if="questions.quest_1.quest_2 === '2 категории'">
                    <div class="questHeader_step" v-if="step === 1">Вопрос 1</div>
                    <div class="questHeader_step" v-if="step === 2">Вопрос 2</div>
                    <div class="questHeader_step" v-if="step === 3">Вопрос 3</div>
                    <div class="questHeader_step" v-if="step === 4">Вопрос 4</div>
                    <div class="questHeader_step" v-if="step === 5">Вопрос 5</div>
                    <div class="questHeader_step" v-if="step === 6">Вопрос 6</div>
                    <div v-if="questions.quest_2 === 'Резидент Казахстана'">
                        <div class="questHeader_step" v-if="step === 7">подарок!</div>
                        <div class="questHeader_step" v-if="step === 8">контакты</div>
                    </div>
                    <div v-else>
                        <div class="questHeader_step" v-if="step === 7">Вопрос 7</div>
                        <div class="questHeader_step" v-if="step === 8">подарок!</div>
                        <div class="questHeader_step" v-if="step === 9">контакты</div>
                    </div>
                    <!-- //-----------------// -->
                    <div class="questHeader_title" v-if="step === 1">Какая лицензия вам необходима?</div>
                    <div class="questHeader_title" v-if="step === 2">Информация о заявителе</div>
                    
                    <div v-if="questions.quest_2 === 'Резидент Казахстана'">
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 === 'Cтроительная'">Наличие производственной базы в долгосрочной аренде</div>
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 !== 'Cтроительная'">Наличие офиса в долгосрочной аренде</div>
                        <div class="questHeader_title" v-if="step === 7">Закажи услугу и получи «Справочник определения категорий объектов»</div>
                        <div class="questHeader_title" v-if="step === 8">Заказать лицензирование строительной деятельности</div>
                    </div>
                    <div v-else>
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 === 'Cтроительная'">Наличие производственной базы в долгосрочной аренде в Казахстане</div>
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 !== 'Cтроительная'">Наличие офиса в долгосрочной аренде в Казахстане</div>
                        <div class="questHeader_title" v-if="step === 7">Планируете ли регистрировать филиал на территории Казахстана</div>
                        <div class="questHeader_title" v-if="step === 8">Закажи услугу и получи «Справочник определения категорий объектов»</div>
                        <div class="questHeader_title" v-if="step === 9">Заказать лицензирование строительной деятельности</div>
                    </div>
                    <div class="questHeader_title" v-if="step === 4">Наличие квалифицированного состава ИТР, подлежащих аттестации</div>
                    <div class="questHeader_title" v-if="step === 5">Наличие документа подтверждающего получение лицензии 5 и более лет назад</div>
                    <div class="questHeader_title" v-if="step === 6">Документы подтверждающие опыт по реализации работ на объектах</div>
                    
                </div>

                <div class="questHeader__items_item" v-if="questions.quest_1.quest_2 === '3 категории'">
                    <div class="questHeader_step" v-if="step === 1">Вопрос 1</div>
                    <div class="questHeader_step" v-if="step === 2">Вопрос 2</div>
                    <div class="questHeader_step" v-if="step === 3">Вопрос 3</div>
                    <div class="questHeader_step" v-if="step === 4">Вопрос 4</div>
                    <div v-if="questions.quest_2 === 'Резидент Казахстана'">
                        <div class="questHeader_step" v-if="step === 5">Вопрос 5</div>
                        <div class="questHeader_step" v-if="step === 6">контакты</div>
                    </div>
                    <div v-else>
                        <div class="questHeader_step" v-if="step === 5">Вопрос 5</div>
                        <div class="questHeader_step" v-if="step === 6">подарок!</div>
                        <div class="questHeader_step" v-if="step === 7">контакты</div>
                    </div>
                    <!-- //-----------------// -->
                    <div class="questHeader_title" v-if="step == 1">Какая лицензия вам необходима?</div>
                    <div class="questHeader_title" v-if="step == 2">Информация о заявителе</div>
                    
                    <div v-if="questions.quest_2 === 'Резидент Казахстана'">
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 === 'Cтроительная'">Наличие производственной базы в долгосрочной аренде</div>
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 !== 'Cтроительная'">Наличие офиса в долгосрочной аренде</div>
                        <div class="questHeader_title" v-if="step === 5">Закажи услугу и получи «Справочник определения категорий объектов»</div>
                        <div class="questHeader_title" v-if="step === 6">Заказать лицензирование строительной деятельности</div>
                    </div>
                    <div v-else>
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 === 'Cтроительная'">Наличие производственной базы в долгосрочной аренде в Казахстане</div>
                        <div class="questHeader_title" v-if="step === 3 && questions.quest_1.quest_1 !== 'Cтроительная'">Наличие офиса в долгосрочной аренде в Казахстане</div>
                        <div class="questHeader_title" v-if="step === 5">Планируете ли регистрировать филиал на территории Казахстана</div>
                        <div class="questHeader_title" v-if="step === 6">Закажи услугу и получи «Справочник определения категорий объектов»</div>
                        <div class="questHeader_title" v-if="step === 7">Заказать лицензирование строительной деятельности</div>
                    </div>

                    <div class="questHeader_title" v-if="step === 4">Наличие квалифицированного состава ИТР, подлежащих аттестации</div>
                </div>

                <div class="questHeader__items_item" v-if="questions.quest_1.quest_2 === 'Нужна помощь'">
                    <div class="questHeader_step" v-if="step === 1">Вопрос 1</div>
                    <div class="questHeader_step" v-if="step === 2">Вопрос 2</div>
                    <div class="questHeader_step" v-if="step === 3">Вопрос 3</div>
                    <div class="questHeader_step" v-if="step === 4">Вопрос 4</div>
                    <div class="questHeader_step" v-if="step === 5">Вопрос 5</div>
                    <div v-if="questions.quest_2 === 'Резидент Казахстана'">
                        <div class="questHeader_step" v-if="step === 6">подарок!</div>
                        <div class="questHeader_step" v-if="step === 7">контакты</div>
                    </div>
                    <div v-else>
                        <div class="questHeader_step" v-if="step === 6">Вопрос 6</div>
                        <div class="questHeader_step" v-if="step === 7">подарок!</div>
                        <div class="questHeader_step" v-if="step === 8">контакты</div>
                    </div>
                    <!-- //-----------------// -->
                    <div class="questHeader_title" v-if="step === 1">Какая лицензия вам необходима?</div>
                    <div class="questHeader_title" v-if="step === 2">Информация о заявителе</div>
                    <div class="questHeader_title" v-if="step === 3">Вид лицензирования</div>
                    <div class="questHeader_title" v-if="step === 4">Тип объекта</div>
                    <div v-if="questions.quest_2 === 'Резидент Казахстана'">
                        <div class="questHeader_title" v-if="step === 5">Описание Объекта</div>
                        <div class="questHeader_title" v-if="step === 6">Закажи услугу и получи «Справочник определения категорий объектов»</div>
                        <div class="questHeader_title" v-if="step === 7">Заказать лицензирование строительной деятельности</div>
                    </div>
                    <div v-else>
                        <div class="questHeader_title" v-if="step === 5">Планируете ли регистрировать филиал на территории Казахстана</div>
                        <div class="questHeader_title" v-if="step === 6">Описание Объекта</div>
                        <div class="questHeader_title" v-if="step === 7">Закажи услугу и получи «Справочник определения категорий объектов»</div>
                        <div class="questHeader_title" v-if="step === 8">Заказать лицензирование строительной деятельности</div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
    name: 'HeaderTitles',
    computed: {
        ...mapGetters([
            'step',
            'questions'
        ])
    }
}
</script>
<style lang="scss">
@import '../../sass/mixins.scss';
.questHeader{
    box-shadow: 0 rem(8) rem(16) rgba(0, 0, 0, 0.16), 
                inset 0 rem(-1) 0 rgba(0, 0, 0, 0.08);

    &__wrapper{
        @include wrapper();
    }
    &__items{
        @include row-flex();
        position: relative;
        box-sizing: border-box;
        height: rem(168);
        padding-top: rem(48);
        
        @include above($break_sm) {
            height: rem(224);
            padding-top: rem(80);
        }
        @include above($break_lg) {
            padding-top: rem(64);
        }

        &_item{
            @include col();
            @include size(24);
            text-align: center;
        }
    }
    &_step{
        font-size: rem(12);
        font-weight: rem(12);
        letter-spacing: rem(6);
        line-height: 1.33;
        text-transform: uppercase;
        margin-bottom: rem(8);

        @include above($break_sm) {
            margin-bottom: rem(16);
        }
        @include above($break_lg) {
            font-size: rem(15);
        }
    }
    &_title{
        font-size: rem(24);
        font-weight: 700;
        letter-spacing: rem(-0.2);
        line-height: 1.25;

        @include above($break_sm) {
            font-size: rem(36);
            letter-spacing: rem(-0.4);
        }
        @include above($break_lg) {
            font-size: rem(48);
            letter-spacing: rem(-0.8);
            line-height: 1.1;
        }
    }
    &_close{
        position: absolute;
        right: rem(8);
        top: rem(16);
        @include above($break_sm) {
            top: rem(24);
        }
    }
}
</style>