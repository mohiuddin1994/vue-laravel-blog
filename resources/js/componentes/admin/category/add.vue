<template>
    <div>
        <div class="col-lg-5 m-auto
        " >
        <div class="card-header">
            <h3> Category</h3>
        </div>
          <div class="card text-left">

            <div class="card-body">
               <form @submit.prevent="addCategory">
               <div class="form-group">
                <label> Category Name </label>
                 <input v-model="form.cat_name" type="text" class="form-control" name="cat_name" placeholder="Username">
    <div v-if="form.errors.has('cat_name')" v-html="form.errors.get('cat_name')" />
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


    export default {
        data(){
            return{
               form: new Form({
                cat_name: '',

                })
            }

        },

        methods: {
          addCategory(){

              this.form.post('/category_store')
              .then((res)=>{
                this.$router.push('/category');

                    Toast.fire({
                        icon: 'success',
                        title: 'category add successfully'
                    });
              })
              .catch((error)=>{
                  console.log(error);
              })
          }
        }
    }

</script>
