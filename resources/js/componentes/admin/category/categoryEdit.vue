
<template>
    <div>
        <div class="col-lg-5 m-auto
        " >
        <div class="card-header">
            <h3> Category</h3>
        </div>
          <div class="card text-left">

            <div class="card-body">
            <p> {{form.cat_name}}  {{this.$route.params.catId}} </p>
               <form @submit.prevent="updateCategory">
               <div class="form-group">
                <label> Category Name </label>
                 <input v-model="form.cat_name" type="text" class="form-control" name="cat_name" placeholder="Username">

                </div>


                <button type="submit" class="btn btn-success mt-4">
                  Submit
                </button>
            </form>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';


    export default {
        data(){
            return{
               form: new Form({
                cat_name: '',

                })
            }

        },

        methods: {
          updateCategory(){
                let id = this.$route.params.catId
              this.form.post(`/update_category/${id}`)
              .then((res)=>{
                 
                    Toast.fire({
                        icon: 'success',
                        title: 'category add successfully'
                    });
              })
              .catch((error)=>{
                  console.log(error);
              })
          }
        },

        mounted(){
            let id = this.$route.params.catId
            axios.get(`/category_edit/${id}`).then((res)=>{
                this.form = res.data.category
            })
        },
    }

</script>
