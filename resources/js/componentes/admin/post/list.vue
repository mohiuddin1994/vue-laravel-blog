<template>
    <div>
         <div class="card text-left col-lg-12 m-auto">
            <div class="card-header">
                  Category
                 <router-link to="/postAdd" class="btn btn-success card-tools" > Post </router-link>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Sl</th>
                            <th scope="col">title</th>
                            <th scope="col">Image </th>
                            <th scope="col"> category name  </th>
                            <th scope="col"> Author Name  </th>
                            <th scope="col"> Description  </th>
                            <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>

                        <td> title</td>
                        <td> Image</td>
                        <td> category name</td>
                        <td>  Description</td>
                        <td>  Mohiuddin </td>
                        <td>  Description DescriptionDescriptionDescription </td>
                        <td> <router-link  class="btn btn-success" to="/postEdit"> edit </router-link>  <a href=""  class="btn btn-success"> delete</a></td>
                       </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
