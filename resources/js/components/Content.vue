<template>
    <section class="questContent" v-if="step >= 1">
        <div class="questContent__wrapper">
            <div class="questContent__items">

                

                <div class="questContent__items_itemFull"  v-if="step === 1">
                    <div class="questContent__forLabel questContent_1_3">
                        <p class="questContent__forLabel_title">Тип лицензии</p>
                        <ul class="questContent__forLabel_list">
                            <li>
                                <label for="opt_1_s" class="label">
                                    <input type="radio" v-model="questions.quest_1.quest_1" id="opt_1_s" class="input_hidden" value="Cтроительная"/>
                                    <span class="radio"></span>
                                    Cтроительная
                                </label>
                            </li>
                            <li>
                                <label for="opt_1_p" class="label">
                                    <input type="radio" v-model="questions.quest_1.quest_1" id="opt_1_p" class="input_hidden" value="Проектная"/>
                                    <span class="radio"></span>
                                    Проектная
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="questContent__forLabel questContent_2_3">
                        <p class="questContent__forLabel_title">Тип категории</p>
                        <ul class="questContent__forLabel_list">
                            <li>
                                <label for="opt_1_1c" class="label">
                                    <input type="radio" v-model="questions.quest_1.quest_2" id="opt_1_1c" class="input_hidden" value="1 категории"/>
                                    <span class="radio"></span>
                                    Первой категории
                                </label>
                            </li>
                            <li>
                                <label for="opt_1_2c" class="label">
                                    <input type="radio" v-model="questions.quest_1.quest_2" id="opt_1_2c" class="input_hidden" value="2 категории"/>
                                    <span class="radio"></span>
                                    Второй категории
                                </label>
                            </li>
                            <li>
                                <label for="opt_1_3c" class="label">
                                    <input type="radio" v-model="questions.quest_1.quest_2" id="opt_1_3c" class="input_hidden" value="3 категории"/>
                                    <span class="radio"></span>
                                    Третьей категории
                                </label>
                            </li>
                            <li>
                                <label for="opt_1_4c" class="label">
                                    <input type="radio" v-model="questions.quest_1.quest_2" id="opt_1_4c" class="input_hidden" value="Нужна помощь"/>
                                    <span class="radio"></span>
                                    Нужна помощь в определении категории
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="questContent__items_item" v-if="step === 2">
                    <div class="questContent__forLabel">
                        <ul class="questContent_list">
                            <li>
                                <label for="opt_2_r" class="label">
                                    <input type="radio" v-model="questions.quest_2" id="opt_2_r" class="input_hidden" value="Резидент Казахстана"/>
                                    <span class="radio"></span>
                                    Юридическое лицо, резидент Казахстана
                                </label>
                            </li>
                            <li>
                                <label for="opt_2_nr" class="label">
                                    <input type="radio" v-model="questions.quest_2" id="opt_2_nr" class="input_hidden" value="Резидент другой страны"/>
                                    <span class="radio"></span>
                                    Юридическое лицо, резидент другой страны
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="questContent__items_item" v-if="step === 3">
                    <div class="questContent__forLabel">

                        <ul class="questContent_list" v-if="questions.quest_1.quest_2 != 'Нужна помощь'">
                            <li>
                                <label for="opt_3_yes" class="label">
                                    <input type="radio" v-model="questions.quest_3.quest" id="opt_3_yes" class="input_hidden" value="Есть"/>
                                    <span class="radio"></span>
                                    Есть
                                </label>
                            </li>
                            <li>
                                <label for="opt_3_no" class="label">
                                    <input type="radio" v-model="questions.quest_3.quest" id="opt_3_no" class="input_hidden" value="Нет"/>
                                    <span class="radio"></span>
                                    Нет
                                </label>
                            </li>
                            <li>
                                <label for="opt_3_nu" class="label">
                                    <input type="radio" v-model="questions.quest_3.quest" id="opt_3_nu" class="input_hidden" value="Не понял вопрос"/>
                                    <span class="radio"></span>
                                    Не понял вопрос
                                </label>
                            </li>
                        </ul>

                        <ul class="questContent_list" v-else>
                            <li>
                                <label for="opt_help_4_s" class="label">
                                    <input type="radio" v-model="questions.quest_3.help" id="opt_help_4_s" class="input_hidden" value="Строительство"/>
                                    <span class="radio"></span>
                                    Строительство
                                </label>
                            </li>
                            <li>
                                <label for="opt_help_4_p" class="label">
                                    <input type="radio" v-model="questions.quest_3.help" id="opt_help_4_p" class="input_hidden" value="Проектирование"/>
                                    <span class="radio"></span>
                                    Проектирование
                                </label>
                            </li>
                            <li>
                                <label for="opt_help_4_sp" class="label">
                                    <input type="radio" v-model="questions.quest_3.help" id="opt_help_4_sp" class="input_hidden" value="Проектирование и строительство"/>
                                    <span class="radio"></span>
                                    Проектирование и строительство
                                </label>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- <div class="questContent__items_item" v-if="step === 4">
                    <div class="questContent__forLabel">
                        <ul class="questContent_list" v-if="questions.quest_1.quest_2 !== 'Нужна помощь'">
                            <li>
                                <label for="opt_4_yes" class="label">
                                    <input type="radio" v-model="questions.quest_4.quest" id="opt_4_yes" class="input_hidden" value="Планирую"/>
                                    <span class="radio"></span>
                                    Планирую
                                </label>
                            </li>
                            <li>
                                <label for="opt_4_no" class="label">
                                    <input type="radio" v-model="questions.quest_4.quest" id="opt_4_no" class="input_hidden" value="Не планирую"/>
                                    <span class="radio"></span>
                                    Не планирую
                                </label>
                            </li>
                            <li>
                                <label for="opt_4_cons" class="label">
                                    <input type="radio" v-model="questions.quest_4.quest" id="opt_4_cons" class="input_hidden" value="Необходима консультация"/>
                                    <span class="radio"></span>
                                    Необходима консультация
                                </label>
                            </li>
                        </ul>

                        
                    </div>
                </div> -->

                <div class="questContent__items_item" v-if="step === 4">
                    <div class="questContent__forLabel">
                        <ul class="questContent_list" v-if="questions.quest_1.quest_2 !== 'Нужна помощь'">
                            <li>
                                <label for="opt_5_3_yes" class="label">
                                    <input type="radio" v-model="questions.quest_4.quest" id="opt_5_3_yes" class="input_hidden" value="Есть в наличии"/>
                                    <span class="radio"></span>
                                    Есть в наличии
                                </label>
                            </li>
                            <li>
                                <label for="opt_5_3_help" class="label">
                                    <input type="radio" v-model="questions.quest_4.quest" id="opt_5_3_help" class="input_hidden" value="Нужна помощь в определении и аттестации"/>
                                    <span class="radio"></span>
                                    Нужна помощь в определении и аттестации
                                </label>
                            </li>
                        </ul>

                        <ul class="questContent_list" v-else>
                            <li>
                                <label for="opt_help_5_g" class="label">
                                    <input type="radio" v-model="questions.quest_4.help" id="opt_help_5_g" class="input_hidden" value="Гражданское строительство"/>
                                    <span class="radio"></span>
                                    Гражданское строительство
                                </label>
                            </li>
                            <li>
                                <label for="opt_help_5_p" class="label">
                                    <input type="radio" v-model="questions.quest_4.help" id="opt_help_5_p" class="input_hidden" value="Промышленное строительство"/>
                                    <span class="radio"></span>
                                    Промышленное строительство
                                </label>
                            </li>
                        </ul>
                        
                    </div>
                </div>

                <div class="questContent__items_item" v-if="step === 5 && questions.quest_1.quest_2 === '3 категории' && questions.quest_2 !== 'Резидент Казахстана'">
                    <div class="questContent__forLabel">
                        <ul class="questContent_list">
                            <li>
                                <label for="opt_413_yes" class="label">
                                    <input type="radio" v-model="questions.quest_5.quest_2" id="opt_413_yes" class="input_hidden" value="Планирую"/>
                                    <span class="radio"></span>
                                    Планирую
                                </label>
                            </li>
                            <li>
                                <label for="opt_413_no" class="label">
                                    <input type="radio" v-model="questions.quest_5.quest_2" id="opt_413_no" class="input_hidden" value="Не планирую"/>
                                    <span class="radio"></span>
                                    Не планирую
                                </label>
                            </li>
                            <li>
                                <label for="opt_413_cons" class="label">
                                    <input type="radio" v-model="questions.quest_5.quest_2" id="opt_413_cons" class="input_hidden" value="Необходима консультация"/>
                                    <span class="radio"></span>
                                    Необходима консультация
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="questContent__items_item" v-if="step === 5 && questions.quest_1.quest_2 !== '3 категории'">
                    <div class="questContent__forLabel">

                        <ul class="questContent_list" v-if="questions.quest_1.quest_2 === 'Нужна помощь' && questions.quest_2 !== 'Резидент Казахстана'">
                            <li>
                                <label for="opt_41_yes" class="label">
                                    <input type="radio" v-model="questions.quest_5.help_1" id="opt_41_yes" class="input_hidden" value="Планирую"/>
                                    <span class="radio"></span>
                                    Планирую
                                </label>
                            </li>
                            <li>
                                <label for="opt_41_no" class="label">
                                    <input type="radio" v-model="questions.quest_5.help_1" id="opt_41_no" class="input_hidden" value="Не планирую"/>
                                    <span class="radio"></span>
                                    Не планирую
                                </label>
                            </li>
                            <li>
                                <label for="opt_41_cons" class="label">
                                    <input type="radio" v-model="questions.quest_5.help_1" id="opt_41_cons" class="input_hidden" value="Необходима консультация"/>
                                    <span class="radio"></span>
                                    Необходима консультация
                                </label>
                            </li>
                        </ul>
                        <ul class="questContent_list" v-else-if="questions.quest_1.quest_2 === 'Нужна помощь' && questions.quest_2 === 'Резидент Казахстана'">
                            <p class="questContent__forLabel_title">Опишите ключевые параметры проектируемого или подлежащего строительству объекта</p>
                            <input type="text" class="input" v-model="questions.quest_5.help_2">  
                        </ul>

                        <ul class="questContent_list" v-else>
                            <li>
                                <label for="opt_47_yes" class="label">
                                    <input type="radio" v-model="questions.quest_5.quest_1" id="opt_47_yes" class="input_hidden" value="Есть в наличии"/>
                                    <span class="radio"></span>
                                    Есть в наличии
                                </label>
                            </li>
                            <li>
                                <label for="opt_47_no" class="label">
                                    <input type="radio" v-model="questions.quest_5.quest_1" id="opt_47_no" class="input_hidden" value="Нет в наличии"/>
                                    <span class="radio"></span>
                                    Нет в наличии
                                </label>
                            </li>
                            <li>
                                <label for="opt_47_cons" class="label">
                                    <input type="radio" v-model="questions.quest_5.quest_1" id="opt_47_cons" class="input_hidden" value="Необходима консультация"/>
                                    <span class="radio"></span>
                                    Необходима консультация
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="questContent__items_item" v-if="step === 6 && questions.quest_1.quest_2 === 'Нужна помощь' && questions.quest_2 !== 'Резидент Казахстана'">
                    <div class="questContent__forLabel">
                        <ul class="questContent_list">
                            <p class="questContent__forLabel_title">Опишите ключевые параметры проектируемого или подлежащего строительству объекта</p>
                            <input type="text" class="input" v-model="questions.quest_5.help_2">  
                        </ul>
                    </div>
                </div>

                <div class="questContent__items_item" v-if="step === 6 && questions.quest_1.quest_2 !== '3 категории' && questions.quest_1.quest_2 !== 'Нужна помощь'">
                    <div class="questContent__forLabel">
                        <ul class="questContent_list" v-if="questions.quest_1.quest_2 === '1 категории'">
                            <li>
                                <label for="opt_5_с_1_1" class="label">
                                    <input type="radio" v-model="questions.quest_6.quest_1" id="opt_5_с_1_1" class="input_hidden" value="Акты приемки работ государственной комиссией, от 10 экземпляров"/>
                                    <span class="radio"></span>
                                    Акты приемки работ государственной комиссией, от 10 экземпляров
                                </label>
                            </li>
                            <li>
                                <label for="opt_5_с_1_2" class="label">
                                    <input type="radio" v-model="questions.quest_6.quest_1" id="opt_5_с_1_2" class="input_hidden" value="Акты выполненных работ по договорам субподряда, от 20 экземпляров"/>
                                    <span class="radio"></span>
                                    Акты выполненных работ по договорам субподряда, от 20 экземпляров
                                </label>
                            </li>
                            <li>
                                <label for="opt_5_с_1_3" class="label">
                                    <input type="radio" v-model="questions.quest_6.quest_1" id="opt_5_с_1_3" class="input_hidden" value="Нужна помощь в определении"/>
                                    <span class="radio"></span>
                                    Нужна помощь в определении
                                </label>
                            </li>
                        </ul>

                        <ul class="questContent_list" v-else>
                            <li>
                                <label for="opt_5_с_2_1" class="label">
                                    <input type="radio" v-model="questions.quest_6.quest_2" id="opt_5_с_2_1" class="input_hidden" value="Акты приемки работ государственной комиссией, от 5 экземпляров"/>
                                    <span class="radio"></span>
                                    Акты приемки работ государственной комиссией, от 5 экземпляров
                                </label>
                            </li>
                            <li>
                                <label for="opt_5_с_2_2" class="label">
                                    <input type="radio" v-model="questions.quest_6.quest_2" id="opt_5_с_2_2" class="input_hidden" value="Акты выполненных работ по договорам субподряда, от 10 экземпляров"/>
                                    <span class="radio"></span>
                                    Акты выполненных работ по договорам субподряда, от 10 экземпляров
                                </label>
                            </li>
                            <li>
                                <label for="opt_5_с_2_3" class="label">
                                    <input type="radio" v-model="questions.quest_6.quest_2" id="opt_5_с_2_3" class="input_hidden" value="Нужна помощь в определении"/>
                                    <span class="radio"></span>
                                    Нужна помощь в определении
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="questContent__items_item" v-if="step === 7 && questions.quest_1.quest_2 !== '3 категории' && questions.quest_1.quest_2 !== 'Нужна помощь' && questions.quest_2 !== 'Резидент Казахстана'">
                    <div class="questContent__forLabel">
                        <ul class="questContent_list">
                            <li>
                                <label for="opt_411_yes" class="label">
                                    <input type="radio" v-model="questions.quest_5.quest_2" id="opt_411_yes" class="input_hidden" value="Планирую"/>
                                    <span class="radio"></span>
                                    Планирую
                                </label>
                            </li>
                            <li>
                                <label for="opt_411_no" class="label">
                                    <input type="radio" v-model="questions.quest_5.quest_2" id="opt_411_no" class="input_hidden" value="Не планирую"/>
                                    <span class="radio"></span>
                                    Не планирую
                                </label>
                            </li>
                            <li>
                                <label for="opt_411_cons" class="label">
                                    <input type="radio" v-model="questions.quest_5.quest_2" id="opt_411_cons" class="input_hidden" value="Необходима консультация"/>
                                    <span class="radio"></span>
                                    Необходима консультация
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="questContent__items_item questContent_gifts"  
                    v-if="(step === 5 && questions.quest_1.quest_2 === '3 категории' && questions.quest_2 === 'Резидент Казахстана') ||
                          (step === 6 && questions.quest_1.quest_2 === '3 категории' && questions.quest_2 !== 'Резидент Казахстана') ||
                          (step === 6 && questions.quest_1.quest_2 === 'Нужна помощь' && questions.quest_2 === 'Резидент Казахстана') ||
                          (step === 7 && questions.quest_1.quest_2 === 'Нужна помощь' && questions.quest_2 !== 'Резидент Казахстана') ||
                          (step === 7 && questions.quest_1.quest_2 !== 'Нужна помощь' && questions.quest_1.quest_2 !== '3 категории' && questions.quest_2 === 'Резидент Казахстана') ||
                          (step === 8 && questions.quest_1.quest_2 !== 'Нужна помощь' && questions.quest_1.quest_2 !== '3 категории' && questions.quest_2 !== 'Резидент Казахстана')">
                    <div class="block"></div>
                    <div class="questContent_gifts_item">
                        <button class="btn btn_prev" @click="$store.state.step--">←</button>
                        <button class="btn btn-pulse btn_effect btn_next" @click="$store.state.step++">Получить →</button>
                    </div>
                </div>


                <div class="questContent__items_item" 
                        v-if="(step === 6 && questions.quest_1.quest_2 === '3 категории' && questions.quest_2 === 'Резидент Казахстана') ||
                        (step === 7 && questions.quest_1.quest_2 === '3 категории' && questions.quest_2 !== 'Резидент Казахстана') ||
                        (step === 7 && questions.quest_1.quest_2 === 'Нужна помощь' && questions.quest_2 === 'Резидент Казахстана') ||
                        (step === 8 && questions.quest_1.quest_2 === 'Нужна помощь' && questions.quest_2 !== 'Резидент Казахстана') ||
                        (step === 8 && questions.quest_1.quest_2 !== 'Нужна помощь' && questions.quest_1.quest_2 !== '3 категории' && questions.quest_2 === 'Резидент Казахстана') ||
                        (step === 9 && questions.quest_1.quest_2 !== 'Нужна помощь' && questions.quest_1.quest_2 !== '3 категории' && questions.quest_2 !== 'Резидент Казахстана')">
                    <div class="questContent__forLabel">
                        <p class="questContent__forLabel_title">Выберите предпочитаемые способы связи</p>
                    <ul class="questContent_checkbox">
                        <li>
                            <label for="opt44-1" class="label">
                                <input type="checkbox" v-model="questions.connection" id="opt44-1" class="input_hidden" value="Звонок"/>
                                <span class="checkbox"></span>
                                Звонок
                            </label>
                        </li>
                        <li>
                            <label for="opt44-2" class="label">
                                <input type="checkbox" v-model="questions.connection" id="opt44-2" class="input_hidden" value="WhatsApp"/>
                                <span class="checkbox"></span>
                                WhatsApp
                            </label>
                        </li>
                        <li>
                            <label for="opt44-3" class="label">
                                <input type="checkbox" v-model="questions.connection" id="opt44-3" class="input_hidden" value="СМС"/>
                                <span class="checkbox"></span>
                                СМС
                            </label>
                        </li>
                    </ul>
                    <p class="questContent__forLabel_title">Введите номер телефона и покупатель свяжется с вами в ближайшее время</p>
                    <div class="questContent__form">

                        <phone-mask-input
                            v-model="phoneForm"
                            autoDetectCountry
                            showFlag
                            wrapperClass="input_wrapper"
                            inputClass="input"
                            flagClass="input_flag"
                            @onValidate="validPhone"
                        />

                        <button class="btn btn-pulse btn_effect questContent__form_btn" @click="submitQuiz">Получить расчёт и&nbsp;подарок</button>
                        <p class="alarm">Оставляя контактную информацию, вы соглашаетесь на&nbsp;обработку персональных данных</p>
                    </div>
                    </div>
                </div>
                <div class="questContent__items_item" v-if="step === 20">
                    <div class="questContent__finish">
                        <div class="questContent__finish_step">Спасибо!</div>
                        <div class="questContent__finish_title">Ваша заявка принята</div>
                        <a :href="siteUrl" class="btn questContent__finish_btn">Перейти на сайт</a>
                    </div>
                </div>

            </div>
        </div>
    </section>    
</template>
<script>
import PhoneMaskInput from  "vue-phone-mask-input"
import axios from 'axios'

import { mapGetters } from 'vuex'


export default {
    name: 'Content',
    data: function () {
        return {
            phoneForm: '',
            isValidPhone: false
        }
    },
    computed: {
        ...mapGetters([
            'step',
            'questions',
            'isMobile',
            'siteUrl'
        ])
    },
    methods: {
        validPhone(e) {
            if(e.isValidByLibPhoneNumberJs) this.isValidPhone = true
            else this.isValidPhone = false
        },
        submitQuiz(e) {
            e.preventDefault();

            if(this.isValidPhone){

                ga.getAll()[0].send('event', 'quiz-licensing', 'send')
                window.ym(62231704,'reachGoal','quiz-form-licensing')

                let text =  [`Тип лицензии: ${this.questions.quest_1.quest_1}`,
                            `\nТип категории: ${this.questions.quest_1.quest_2}`,
                            `\nИнформация о заявителе: ${this.questions.quest_2}`]
                
                if(this.questions.quest_1.quest_2 === '1 категории'){
                    if(this.questions.quest_1.quest_1 === 'Cтроительная'){
                        if(this.questions.quest_2 === 'Резидент Казахстана'){
                            text.push(`\nНаличие производственной базы на праве собственности: ${this.questions.quest_3.quest}`)
                        }else{
                            text.push(`\nПроизводственная база в собственности в стране резидентства или другой стране: ${this.questions.quest_3.quest}`)
                            text.push(`\nПланируете ли регистрировать филиал на территории Казахстана: ${this.questions.quest_5.quest_2}`)
                        }
                    }else{
                        if(this.questions.quest_2 === 'Резидент Казахстана'){
                            text.push(`\nНаличие офиса в долгосрочной аренде: ${this.questions.quest_3.quest}`)
                        }else{
                            text.push(`\nНаличие офиса в долгосрочной аренде в Казахстане: ${this.questions.quest_3.quest}`)
                            text.push(`\nПланируете ли регистрировать филиал на территории Казахстана: ${this.questions.quest_5.quest_2}`)
                        }
                    }
                    text.push(`\nНаличие квалифицированного состава ИТР, подлежащих аттестации: ${this.questions.quest_4.quest}`)
                    text.push(`\nНаличие документа подтверждающего получение лицензии 10 и более лет назад: ${this.questions.quest_5.quest_1}`)
                    text.push(`\nДокументы подтверждающие опыт по реализации работ на объектах: ${this.questions.quest_6.quest_1}`)
                    
                }

                if(this.questions.quest_1.quest_2 === '2 категории'){
                    if(this.questions.quest_1.quest_1 === 'Cтроительная'){
                        if(this.questions.quest_2 === 'Резидент Казахстана'){
                            text.push(`\nНаличие производственной базы в долгосрочной аренде: ${this.questions.quest_3.quest}`)
                        }else{
                            text.push(`\nНаличие производственной базы в долгосрочной аренде в Казахстане: ${this.questions.quest_3.quest}`)
                            text.push(`\nПланируете ли регистрировать филиал на территории Казахстана: ${this.questions.quest_5.quest_2}`)
                        }
                    }else{
                        if(this.questions.quest_2 === 'Резидент Казахстана'){
                            text.push(`\nНаличие офиса в долгосрочной аренде: ${this.questions.quest_3.quest}`)
                        }else{
                            text.push(`\nНаличие офиса в долгосрочной аренде в Казахстане: ${this.questions.quest_3.quest}`)
                            text.push(`\nПланируете ли регистрировать филиал на территории Казахстана: ${this.questions.quest_5.quest_2}`)
                        }
                    }
                    text.push(`\nНаличие квалифицированного состава ИТР, подлежащих аттестации: ${this.questions.quest_4.quest}`)
                    text.push(`\nНаличие документа подтверждающего получение лицензии 5 и более лет назад: ${this.questions.quest_5.quest_1}`)
                    text.push(`\nДокументы подтверждающие опыт по реализации работ на объектах: ${this.questions.quest_6.quest_1}`)
                    
                }

                if(this.questions.quest_1.quest_2 === '3 категории'){
                    if(this.questions.quest_1.quest_1 === 'Cтроительная'){
                        if(this.questions.quest_2 === 'Резидент Казахстана'){
                            text.push(`\nНаличие производственной базы в долгосрочной аренде: ${this.questions.quest_3.quest}`)
                        }else{
                            text.push(`\nНаличие производственной базы в долгосрочной аренде в Казахстане: ${this.questions.quest_3.quest}`)
                            text.push(`\nПланируете ли регистрировать филиал на территории Казахстана: ${this.questions.quest_5.quest_2}`)
                        }
                    }else{
                        if(this.questions.quest_2 === 'Резидент Казахстана'){
                            text.push(`\nНаличие производственной базы в долгосрочной аренде: ${this.questions.quest_3.quest}`)
                        }else{
                            text.push(`\nНаличие производственной базы в долгосрочной аренде в Казахстане: ${this.questions.quest_3.quest}`)
                            text.push(`\nПланируете ли регистрировать филиал на территории Казахстана: ${this.questions.quest_5.quest_2}`)
                        }
                    }
                    text.push(`\nНаличие квалифицированного состава ИТР, подлежащих аттестации: ${this.questions.quest_3.quest}`)
                }

                if(this.questions.quest_1.quest_2 === 'Нужна помощь'){

                    text.push(`\nВид лицензирования: ${this.questions.quest_3.help}`)
                    text.push(`\nТип объекта: ${this.questions.quest_4.help}`)
                    
                    if(this.questions.quest_2 !== 'Резидент Казахстана'){
                        text.push(`\nПланируете ли регистрировать филиал на территории Казахстана: ${this.questions.quest_5.help_1}`)
                    }
                    text.push(`\nОписание Объекта: ${this.questions.quest_5.help_2}`)

                }

                text.push(`\nПредпочитаемые способы связи: ${this.questions.connection}`)

                text = text.toString()

                console.log(text)


                axios.post('/leads', {
                    phone: this.phoneForm,
                    tag: 'Лицензирование - Квиз',
                    text

                }).then(() => {
                    this.$store.state.step = 20,
                    setTimeout(() => {
                        window.location.href = this.siteUrl
                    }, 4000)
                })
            }
            else 
            this.$notify({
                group: 'alert',
                type: 'error',
                text: this.$ml.get('alert_phone')
            })
        },
    },
    components: {
        PhoneMaskInput
    }
}
</script>
<style lang="scss" scoped>
@import '../../sass/mixins.scss';
.questContent{
    &__wrapper{
        @include wrapper();
        //100vh - quizHeader - quizBottom - toolbarSafari
        min-height: calc(100vh - 168px - 120px - 108px);

        @media only screen 
            and (device-width: 375px) 
            and (device-height: 812px) 
            and (-webkit-device-pixel-ratio: 3) { 
            min-height: calc(100vh - 168px - 120px - 179px);
        }
        @media only screen 
            and (device-width: 414px) 
            and (device-height: 896px) 
            and (-webkit-device-pixel-ratio: 3) { 
            min-height: calc(100vh - 168px - 120px - 179px);
        }
        @include above($break_sm) {
            min-height: calc(100vh - 80px - 224px - 120px - 108px);
        }
        @include above($break_lg) {
            min-height: calc(100vh - 80px - 224px - 120px);
        }

    }
    &__items{
        @include row-flex();
        height: 100%;

        &_item{
            @include col();
            @include size(24);
            @include size-lg(16);
            @include offset-lg(4);
            padding-top: rem(48);
            @include above($break_sm) {
                padding-top: rem(64);
                display: flex;
            }
        }

        &_itemFull{
            @include col();
            @include size(24);
            padding-top: rem(48);
            @include above($break_sm) {
                padding-top: rem(64);
                display: flex;
            }
        }
    }
    &__forLabel{
        @include col();
        @include size(24);

        &_title{
            font-size: rem(18);
            font-weight: 700;
            margin-bottom: rem(16);
        }

        &_list{
            @include row-flex();
       
            li{
                @include col();
                @include size(24);
                line-height: 1.5;
                letter-spacing: rem(-0.1);
                overflow: hidden;

                &:not(:last-child){
                    margin-bottom: rem(24);
                    @include above($break_sm) {
                        margin-bottom: rem(16);
                    }
                }
            }
        }
    }
    &_1_3{
        @include size_sm(12);
        @include size_lg(8);
        margin-bottom: rem(48);
    }
    &_2_3{
        @include size_sm(12);
        @include size_lg(16);

        li:last-child{
            margin-top: rem(24);
        }
        @include above($break_lg) {
            ul{
                display: flex;
            }
            li:first-child{
                order: -1;
                @include size-lg(12);
            }
            li:last-child{
                order: -1;
                @include size-lg(12);
                margin-top: 0;
            }
            
        }
    }
    &_list{
        @include row-flex();
       
        li{
            @include col();
            @include size(24);
            @include size-sm(12);
            line-height: 1.5;
            letter-spacing: rem(-0.1);
            overflow: hidden;

            &:not(:last-child){
                margin-bottom: rem(24);
                @include above($break_sm) {
                    margin-bottom: rem(16);
                }
            }
        }

        .hr{
            margin-bottom: rem(24);
            @include above($break_sm) {
                margin-bottom: rem(16);
            }
        }
    }
    &_half{
        @include size-sm(12);

        &_half{
            @include size-sm(12);
        }
    }
    &_checkbox{
        @include row-flex();
        padding-bottom: rem(16);

        @include above($break_sm) {
            padding-bottom: rem(48);
        }
       
        li{
            @include col();
            @include size(24);
            @include size-sm(12);
            line-height: 1.5;
            letter-spacing: rem(-0.1);
            overflow: hidden;

            &:not(:last-child){
                margin-bottom: rem(16);
            }
        }
    }
    &_gifts{
        position: relative;
        display: flex;
        flex-direction: column;
        padding-top: 0 !important;

        &::before{
            content: '';
            position: absolute;
            top: 0;
            left: rem(-16);
            right: rem(-16);
            bottom: 0;
            background-image: url(../../images/gift_sm.jpg);
            background-size: cover;
            background-position: right;

            @include above($break_sm) {
                left: rem(-32);
                right: rem(-32);
            }
        }

        .block{
            box-sizing: border-box;
            z-index: 10;
            min-height: calc(100vh - 168px - 120px - 108px);

            @media only screen
                and (device-width: 375px) 
                and (device-height: 812px) 
                and (-webkit-device-pixel-ratio: 3) { 
                min-height: calc(100vh - 168px - 120px - 179px);
            }

            @media only screen 
                and (device-width: 414px) 
                and (device-height: 896px) 
                and (-webkit-device-pixel-ratio: 3) { 
                min-height: calc(100vh - 168px - 120px - 179px);
            }

            @include above($break_sm) {
                min-height: calc(100vh - 224px - 80px - 120px - 108px);
            }
            @include above($break_lg) {
                min-height: calc(100vh - 224px - 80px - 120px);
            }
        }

        &_item{
            @include col();
            @include size(24);
            @include size-lg(16);
            @include offset-lg(4);
            display: flex;
            justify-content: center;
            padding-bottom: rem(32);
            padding-top: rem(32);
        }

        .btn{
            padding: 0;
        }
    }
    &_range{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        @include above($break_sm) {
            padding-top: rem(32);
        }
        
        &_input{
            color: $primary_color;
            font-size: rem(20);
            text-align: center;
            margin-bottom: rem(8);

            @include above($break_lg) {
                display: none;
            }
        }
        &_intro{
            width: 100%;
            margin-top: rem(8);
            display: flex;
            justify-content: space-between;
            font-size: rem(20);
            color: #ccc6c6;
        }
    }
    .gifts{
        @include size-lg(24);
        @include offset-lg(0);
    }
    &__form{
        @include row-flex();
        flex-direction: column;
        align-items: center;

        @include above($break_sm) {
            flex-direction: row;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        & > *{
            @include col();
            @include size(24);
            @include size-sm(12);
        }

        .alarm{
            padding-bottom: rem(16);
            @include above($break_sm) {
                margin-left: auto;
                text-align: left;
            }
        }

        &_intro{
            font-size: rem(18);
            letter-spacing: rem(-0.3);
            line-height: 1.44;
            margin-bottom: rem(32);
            text-align: center;
        }
        &_btn{
            background-color: $primary_color;
            color: $white;
            margin-top: rem(16);
            margin-bottom: rem(16);
            @include above($break_sm) {
                margin-top: 0;
            }
        }
    }
    &__finish{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: calc(100vh - 108px - 48px);

        @include above($break_sm) {
            min-height: calc(100vh - 108px - 80px - 64px);
        }
        @include above($break_lg) {
            min-height: calc(560px - 64px);
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
            margin-bottom: rem(48);
    
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
        &_btn{
            background-color: $primary_color;
            color: $white;
            letter-spacing: rem(0.8);
        }
    }
}

@-webkit-keyframes circle {
	0% {
		opacity: 1;
	}
	40% {
		opacity: 1;
	}
	100% {
		width: 200%;
		height: 200%;
		opacity: 0;
	}
}
@keyframes circle {
	0% {
		opacity: 1;
	}
	40% {
		opacity: 1;
	}
	100% {
		width: 200%;
		height: 200%;
		opacity: 0;
	}
}
/* End Circle */
</style>