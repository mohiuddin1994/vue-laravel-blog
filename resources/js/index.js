import axios from "axios"

 export const storeData = {

    state:{
        category :[],
    },
    getters:{
        allCategory(state){
            return state.category
        }
    },
    actions:{
        getCategory(context){
            axios.get("/getCategory").then((res)=>{
                 context.commit("category",res.data.category)
            });
        }
    },
    mutations:{
        category(state,data){
            return state.category = data;
        }
    }



 }
