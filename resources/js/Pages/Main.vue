<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Appointments Table</h3>
          
            <div class="card-tools">
             <router-link :to="{name: 'form'}"> Book now </router-link>
                
              
            </div>
          </div>
         
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Name   |</th>               
                  <th>Date   |</th>
                  <th>Time</th>                       
                </tr>
              </thead>
              <tbody>
                  
                <tr v-for="appointment in appointments" :key="appointment.id" class="line">  
                          
                  <td>{{appointment.name}}   | </td>
                  <td>{{appointment.time}}   | </td>
                  <td>{{appointment.date | myDate }}    </td>         
                 </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

     
   
  </div>
</template>

<script>
 
import moment from "moment";
import axios from "axios";

export default {
    name: 'home',

  data() {

    return {
    
      activeColor: 'red',
      appointments: [],
      
    };
  },
  methods: {
      
      chooseColor(date){
          var today = new Date(Date.now().format("YYYY-MM-DD"));
          var info = this.line;
          this.time = moment(date).format("YYYY-MM-DD");
          if(moment(this.date).isAfter('today', 'day')){
                this.line.addClass("past");
          }else if(moment(this.date).isBefore('today', 'day')){
              this.line.addClass("future");
          }else{
              this.line.addClass("present");
          }
    
        },   
 
  },

 
    mounted() {
    axios.get("/api/appointments").then(response => {
      this.appointments = response.data;
    });
  },
};
</script>


<style scoped>

.before{
     color: #1959cf;
}
.today{
      color:#ee0f0f;
}
.after{
    color: #8f8686;
   
}

 
</style>