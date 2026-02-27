import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        httpheader:{},
        pageload:true,
        statBar:false,
    },
    mutations: {
        setHttpHeader(state, payload) {
            state.httpheader = payload;
        },
        setMap(state,payload){
            state.gmap = payload;
        },
        setPageLoad(state,loading){
            state.pageload = loading;
        },
    },
    getters: {
        gmap: state => state.gmap,
        pageload: state => state.pageload,
        geocode: state => state.geocode,
        statCharts: state => state.statCharts,
    }
});
