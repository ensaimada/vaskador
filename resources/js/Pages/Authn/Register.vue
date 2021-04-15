<template>
  <layout>
    <form @submit.prevent="submit">
      @csrf
      
      <label for="first_name">First name:</label>
      <input id="first_name" v-model="form.first_name" />
      <label for="last_name">Last name:</label>
      <input id="last_name" v-model="form.last_name" />
      <label for="email">Email:</label>
      <input id="email" v-model="form.email" />
      <button type="submit">Submit</button>
    </form>
  </layout>
</template>

<script>
  import layout from "@/Layouts/Guest/Layout"

export default {
  layout: layout,

  components: {

  },

  data() {
    return {
      form: this.$inertia.form ({
        name_title: '',
        name_given: '',
        name_middle: '',
        name_last: '',
        info_sex: '',
        info_dob: '',
        email: '',
        email_confirmation: '',
        password: '',
        pasword_confirmation: '',
        terms: false,
      })
    }
  },

  methods: {
    submit() {
      this.$inertia.post('/users', this.form), {
        onFinish: () => this.form.reset('password', 'password_confirmation'),
      }
    },
  },
}
</script>