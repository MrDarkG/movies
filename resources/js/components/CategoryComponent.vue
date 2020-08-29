<template>
    <div class="col-md-8">
        
        <ul class="list-group w-100">
            <li class="list-group-item  bg-dark text-light">კატეგორიები</li>
            <li class="list-group-item">
                <div class="row justify-content-between">
                    <div class="col-md-9">

                        <input type="text" name="category_name" v-model="cat_name" class="form-control w-100" placeholder="კატეგორია">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-success w-100 mt-md-0 mt-2" v-on:click="addcat()">
                            
                            დამატება
                        </button>
                    </div>
                </div>
            </li>
            <li class="list-group-item" v-for="(cat,index) in cats">
                <div class="row justify-content-between ">
                    <div class="col-md-7">
                        
                        {{ cat['name'] }}
                    </div>
                    <div class="col-md-5 d-flex">
                        <button class="btn btn-warning w-50 mr-2" v-on:click="updatecat(index)">
                            განახლება
                        </button>
                        <button class="btn btn-danger  w-50" v-on:click="deletecat(index)">
                            
                            წაშლა
                        </button>
                    </div>
                </div>
            </li>
            
          
        </ul>
        <div id="popup1" class="overlay" v-if="show_modal">
            <div class="popup">
                <a class="close" href="#" v-on:click="show_modal=0">&times;</a>
                <div class="content">
                    <input type="text" name=""  v-model="current_cat_name" class="form-control">
                </div>
                <button class="btn btn-primary w-100 mt-2" v-on:click="storeupdate()">განახლება</button>
            </div>
        </div>
    </div>

</template>

<script>
 
    export default {
        props: [
            "categories"
        ],
        
        data(){
            return {
                cats:[
                    
                ],
                show_modal:0,
                cat_name:"",
                id_to_update:"",
                current_cat_name:"",
                index:"",
            }
        },
        methods:{
            deletecat(x){
                axios
                    .get("/admin/categories/delete/" + this.cats[x]["id"] )
                    .then(response => {
                      if (response.data.status == "error") {
                        return false;
                      }
                      if (response.data==1) {
                        this.$delete(this.cats, x);
                      }

                    })
                    .catch(error => this.errors.record(error.response));
            },
            addcat(){
                axios
                    .post("/admin/categories/store/",{
                        name:this.cat_name,
                    })
                    .then(response => {
                      if (response.data.status == "error") {
                        return false;
                      }
                      if (response.data.status=="success") {
                        this.cats=this.cats.reverse();
                        this.cats.push({name:response.data["newcat"]["name"],id:response.data["newcat"]["id"]});
                        this.cats=this.cats.reverse();

                        this.cat_name="";
                        
                      }
                      else{
                        console.log(response.data.status)
                      }

                    })
                    .catch(error => this.errors.record(error.response));
            },
            storeupdate(){
                axios
                    .post("/admin/categories/update",{
                        id:this.id_to_update,
                        name:this.current_cat_name,
                    })
                    .then(response => {
                      if (response.data.status == "error") {
                        return false;
                      }
                      if (response.data.status=="success") {
                        this.cats[this.index]["name"]=this.current_cat_name;
                        this.current_cat_name="";
                        this.id_to_update="";
                        this.index="";
                        this.cat_name="";
                        this.show_modal=0;
                        
                      }
                      else{
                        console.log(response.data.status)
                      }

                    })
                    .catch(error => this.errors.record(error.response));

            },

            updatecat(x){
                console.log(x)
                this.index=x;
                this.show_modal=1;
                this.current_cat_name=this.cats[x]["name"];
                this.id_to_update=this.cats[x]["id"];
                /*this.storeupdate(x)*/
            },
            
        },
        mounted() {
            for (var i = 0; i < this.categories.length; i++) {
                this.cats.push({
                    name:this.categories[i]["name"],
                    id:this.categories[i]["id"]
                });
            }
        }
    };
</script>
