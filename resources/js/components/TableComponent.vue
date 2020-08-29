<template>
  <div>
    <div class="mb-2 d-flex flex-wrap justify-content-between ">
      <div class="d-flex col-md-6 ">
        <label for="count">
          
          მაჩვენე 
        </label>
        <select class="form-control ml-2 mr-2 col-2" id="count">
          <option>10</option>
          <option>50</option>
          <option>100</option>
          <option>200</option>
        </select> 
        <label for="count">
          
          შედეგი 
        </label>       
      </div>
      <div class="col-md-5 row">
        <input type="" name="" class="form-control col-md-12" placeholder="ძებნა">
      </div>
    </div>
    <div id="vue-root" class=" table-responsive ">
        <datatable :columns="columns" :data="rows" class="table table-dark table-hover table-striped table-bordered  shadow rounded"></datatable>
    </div>
    <div class="mt-4 d-flex flex-wrap justify-content-between w-100">
      <div class="row col-md-6 just">
        500 შედეგი 1000 დან
      </div>
      <div class="col-md-6 row justify-content-end">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"> << წინა</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">შემდეგი >> </a></li>
          </ul>
        </nav>
      </div>
    </div>

  </div>
</template>

<script>
import Vue from 'vue';
import { VuejsDatatableFactory } from 'vuejs-datatable';
 
Vue.use( VuejsDatatableFactory );
export default {
  name: 'test',
  data(){
    return {
      columns: [
          {label: 'id', field: 'id'},
          {label: 'Username', field: 'user.username', headerClass: 'class-in-header second-class'},
          {label: 'First Name', field: 'user.firstName'},
          {label: 'Last Name', field: 'user.lastName'},
          {label: 'Email', field: 'user.email'},
          {label: 'Address', representedAs: ({address, city, state}) => `${address}<br />${city}, ${state}`, interpolate: true}
        ],
        rows: [
          {
            id: 1,
            user: {
              username: "dprice0",
              firstName: "Daniel",
              lastName: "Price",
              email: "dprice0@blogs.com"
            },
            address: "3 Toban Park",
            city: "Pocatello",
            state: "Idaho"
          },
          {
            id: 2,
            user: {
              username: "dprice0",
              firstName: "asd",
              lastName: "Price",
              email: "dprice0@blogs.com"
            },
            address: "3 Toban Park",
            city: "Pocatello",
            state: "Idaho"
          },
          {
            id:3,
            user: {
              username: "dprice0",
              firstName: "asd",
              lastName: "Price",
              email: "dprice0@blogs.com"
            },
            address: "3 Toban Park",
            city: "Pocatello",
            state: "Idaho"
          },
          {
            id: 4,
            user: {
              username: "dprice0",
              firstName: "asd",
              lastName: "Price",
              email: "dprice0@blogs.com"
            },
            address: "3 Toban Park",
            city: "Pocatello",
            state: "Idaho"
          },
          {
            id: 5,
            user: {
              username: "dprice0",
              firstName: "asd",
              lastName: "Price",
              email: "dprice0@blogs.com"
            },
            address: "3 Toban Park",
            city: "Pocatello",
            state: "Idaho"
          },
        ]
    };
  },
};
</script>