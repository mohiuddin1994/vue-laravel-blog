<template>
    <div>
        <div class="col-md-6 m-auto">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> Post Add</h3>
                    <router-link tag="button" to="/post" class="card-tools btn btn-secondary" style="background:#3c2c2c" > post
                    </router-link>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title </label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Enter Category Name">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Image </label>
                            <input type="file" class="form-control" id="exampleInputEmail1">

                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Description </label>
                             <textarea name="" id="" cols="" rows="" class="form-control"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</template>

<script>
export default {

}
</script>
