import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        siteUrl: 'https://uppercase.kz',
        phoneSite: '+7 747 135 0000',
        phoneSiteFormat: '+77471350000',
        step: 0,
        questions: {
            quest_1: {
                quest_1: 'Cтроительная',
                quest_2: '1 категории'
            },
            quest_2: 'Резидент Казахстана',
            quest_3: {
                quest: 'Есть',
                help: 'Строительство'
            }, 
            quest_4: {
                quest: 'Есть в наличии',
                help: 'Гражданское строительство'
            },
            quest_5: {
                quest_1: 'Есть в наличии',
                quest_2: 'Планирую',
                help_1: 'Планирую',
                help_2: ''
            },
            quest_6: {
                quest_1: 'Акты приемки работ государственной комиссией, от 10 экземпляров',
                quest_2: 'Акты приемки работ государственной комиссией, от 5 экземпляров'
            },
            connection: []
        },
        isMobile: false,
        isCallBack: false,
        utm: {
            utm_source: false,
            utm_campaign: false,
            utm_medium: false,
            utm_term: false
        }
    },
    mutations: {
        callBack(s){
            s.isCallBack = !s.isCallBack
        },
        handleResize(s) {
            if(window.innerWidth >= 768){
                s.isMobile = true
            }else{
                s.isMobile = false
            }
        },
        SET_UTM: (state,payload) => {
            state.utm.utm_source = payload.utm_source,
            state.utm.utm_content = payload.utm_source,
            state.utm.utm_campaign = payload.utm_campaign,
            state.utm.utm_medium = payload.utm_medium,
            state.utm.utm_term = payload.utm_term
        }
    },
    actions: {
        setUtm: (context,utm) => {
            context.commit('SET_UTM',utm);
        },
        callBack({commit}) {
            commit('callBack')
        },
        skip({commit}, val){
            commit('skip', val)
        },
        handleResize({commit}) {
            commit('handleResize')
        }
    },
    getters: {
        siteUrl: s => s.siteUrl,
        phoneSite: s => s.phone_site,
        phoneSiteFormat: s => s.phone_site_format,
        step: s => s.step,
        questions: s => s.questions,
        phoneCalback: s => s.phoneCalback,
        isMobile: s=> s.isMobile,
        isCallBack: s=> s.isCallBack,
        utm : state=>state.utm
    }
})
