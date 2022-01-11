<template>
    <div>
         <div class="card text-left col-lg-8 m-auto">
            <div class="card-header">
                  Category
                 <router-link to="/categoryAdd" class="btn btn-success card-tools" > add category </router-link>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Sl</th>
                            <th scope="col">Category Name </th>
                            <th scope="col">Date </th>
                            <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for=" (item,index) in allCategory " :key="item.id">
                            <th scope="row"> {{index + 1}} </th>
                            <td > {{item.cat_name}}  </td>
                            <td > {{item.created_at | timeFormate}}</td>
                            <td>
                                <router-link :to="'/categoryEdit/'+item.id" class="btn btn-success" > Edit  </router-link>
                                <a  class="btn btn-success" @click="category_delete(item.id)"> Delete  </a>
                             </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    date(){
        return{

        }
    },
    mounted(){
        this.$store.dispatch("getCategory")
    },
    computed:{
        allCategory(){
         return this.$store.getters.allCategory;
        }
    },
    methods:{
        category_delete(id){

            axios.get("/categoryDelete/"+id).then((res)=>{
            this.$store.dispatch("getCategory");
                 Toast.fire({
                        icon: 'success',
                        title: 'Category Delete success'
                    });


            });

        }
    }


}
</script>
