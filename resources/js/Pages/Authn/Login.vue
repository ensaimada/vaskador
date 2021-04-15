<template>
  <layout>
     <FormValidationError class="mb-4"/>

    <div 
      v-if="status" 
      class="mb-4 font-medium text-sm text-green-600">
      {{ status }}
    </div>

    <form @submit.prevent="submit">
      @csrf
      
      <div>
        <label for="email" value="Email" />
        <input 
          id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
      </div>

      <div class="mt-4">
        <label for="password" value="Password" />
        <input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
      </div>

      <div class="block mt-4">
        <label class="flex items-center">
          <checkbox name="remember" v-model:checked="form.remember" />
          <span class="ml-2 text-sm text-gray-600">Remember me</span>
        </label>
      </div>

      <div class="flex items-center justify-end mt-4">
        <inertia-link 
          v-if="canResetPassword" 
          :href="route('password.request')" 
          class="underline text-sm text-gray-600 hover:text-gray-900">
          Forgot your password?
        </inertia-link>

        <button 
          class="ml-4" 
          :class="{ 'opacity-25': form.processing }" 
          :disabled="form.processing">
          Log in
        </button>
      </div>
    </form>
  </layout>
</template>

<script>
  import layout from "@/Layouts/Guest/Layout"
  import FormValidationError from "@/Components/Validators/FormValidationError"

  export default {
    layout: layout,

    components: {
      FormValidationError,
    },

    props: {
      canResetPassword: Boolean,
      status: String
    },

    data() {
      return {
        form: this.$inertia.form({
          email: '',
          password: '',
          remember: false
        })
      }
    },

    methods: {
      submit() {
        this.form 
          .transform(data => ({
            ... data,
            remember: this.form.remeber ? 'on' : ''
          }))
          .post(this.route('login'), {
            onFinish: () => this.form.reset('password'),
          })
      },
    },
  }
</script>