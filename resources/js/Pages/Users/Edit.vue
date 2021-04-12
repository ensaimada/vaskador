<template>
  <layout>
    <div class="container">
      <!-- ERROR MESSAGE BANNER -->
      <div v-if="Object.keys(errors).length > 0" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 relative" role="alert">
        <strong class="font-bold">Alert</strong>
        <span class="block sm:inline">{{ errors[Object.keys(errors)[0]][0] }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
      </div>

      <!-- UPDATE USER FORM -->
      <form action="#" method="PATCH" class="my-5" @submit.prevent="updateUser">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Name" v-model="form.name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email" v-model="form.email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password" v-model="form.password">
        </div>
        <button type="submit" class="d-flex btn btn-primary" :disabled="loading">
          <span>Update User</span>
        </button>
      </form>

      <!-- DELETE USER BUTTON -->
      <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent" @click="deleteUser">
        .DELETE-USER
      </button>

    </div>
  </layout>
</template>

<script>
  import layout from "@/Layouts/Dashboard/Layout"

  export default {
    metaInfo: { title: 'EditUser' },
    layout: layout,

    props: ['user', 'errors'],

    data() {
      return {
        loading: false,
        form: {
          name: this.user.name,
          email: this.user.email,
        }
      }
    },

    methods: {
      updateUser() {
        this.loading = true;
        this.$inertia.patch(`/users/${this.user.id}`, this.form)
          .then(()=>{
            this.loading = false;
          })
      },
      deleteUser() {
        if (confirm('Are you sure you want to delete this user?')) {
          this.$inertia.delete(`/users/${this.user.id}`) 
            .then(() => {
              //
            })
        }
      }
    },
  }
</script>