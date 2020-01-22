import $axios from '../api.js'

const state = () => ({

})

const mutations = {

}

const actions = {
    submit({ commit }, payload) {
        localStorage.setItem('token', null) //reset local storage menjadi null 
        commit('SET_TOKEN', null, { root:true }) //reset state token menjadi null 
        //KARENA MUTATIONS SET_TOKEN BERADA PADA ROOT STORES, MAKA DITAMBAHKAN PARAMETER
        //{ root: true }
      
        //KITA MENGGUNAKAN PROMISE AGAR FUNGSI SELANJUTNYA BERJALAN KETIKA FUNGSI INI SELESAI
        return new Promise((resolve, reject) => {
            //MENGIRIM REQUEST KE SERVER DENGAN URI /login 
            //DAN PAYLOAD ADALAH DATA YANG DIKIRIMKAN DARI COMPONENT LOGIN.VUE
            $axios.post('login', payload)
            .then((response) => {
                //jika response sukses 
                if (response.data.status == 'succes') {
                    //maka local storage dan state diset menggunakan api dari server response 
                    localStorage.setItem('token', response.data.data)
                    commit('SET_TOKEN', response.data.data, { root: true })
                } else {
                    commit('SET_ERRORS', { invalid: 'Email/Password Salah' }, { root: true })
                }
                //resolve agar dianggap selesai 
                resolve(response.data)
            })
            .catch((error) =>{
                if (error.response.status == 422) {
                    commit('SET_ERRORS', error.response.data.errors, { root: true})
                }
            })
        })
    }
}

export default {
    namespaced: true,
    state,
    actions,
    mutations
}