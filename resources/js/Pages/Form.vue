<template>
 

  <form @submit.prevent="submit">
    <div class="form-group">
      <label for="name">Name</label>
      <input
        type="text"
        class="form-control"
        name="name"
        id="name"
        v-model="fields.name"
      />
      <div v-if="errors && errors.name" class="text-danger">
        {{ errors.name[0] }}
      </div>
    </div>

    <div class="form-group">
      <label for="email">E-mail</label>
      <input
        type="email"
        class="form-control"
        name="email"
        id="email"
        v-model="fields.email"
      />
      <div v-if="errors && errors.email" class="text-danger">
        {{ errors.email[0] }}
      </div>
    </div>

    <div class="form-group">
      <label for="message">Time</label>
      <select id="time" name="time"  class="form-control" v-model="fields.time">
        <option disabled value="">Please select one</option>
        <option>9 AM</option>
        <option>10 AM</option>
        <option>11 AM</option>
        <option>12 AM</option>
        <option>1 PM</option>
        <option>2 PM</option>
        <option>3 PM</option>
        <option>4 PM</option>
        <option>5 PM</option>
      </select>

      <div v-if="errors && errors.time" class="text-danger">
        {{ errors.time[0] }}
      </div>
    </div>

    <div class="form-group">
      <label for="name">date</label>
      <datepicker
          class="my-datepicker"
          id="date"
          calendar-class="my-datepicker_calendar"
          :format="customDate"
          v-model="fields.date"
          :inline="true"
        ></datepicker>
   
      <div v-if="errors && errors.date" class="text-danger">
        {{ errors.date[0] }}
      </div>
    </div>

    <div class="form-group">
      <label for="name">phone</label>
      <input
        type="text"
        class="form-control"
        name="phone"
        id="phone"
        v-model="fields.phone"
      />
      <div v-if="errors && errors.phone" class="text-danger">
        {{ errors.phone[0] }}
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Send message</button>
  
  </form>

 
</template>
<script>
import datepicker from "vuejs-datepicker";
import moment from "moment";
import axios from "axios";

export default {
    name: 'form',
  data() {
    return {
      fields: {},
      errors: {},
    };
  },
   components: {
    datepicker,
  },
  methods: {

      customDate(date) {
      this.time = moment(date).format("YYYY-MM-DD");
      },
    submit() {
      this.errors = {};
      axios
        .post("api/appointments", this.fields)
        .then((response) => {
          this.fields = {};
        })
        .catch((error) => {
           alert(error);
          if (error.response.status === 422) {
            this.errors = error.response.data.errors || {};
          
          }
        });
    },
  },
};
</script>