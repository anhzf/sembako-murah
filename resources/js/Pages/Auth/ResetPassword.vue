<template>
  <breeze-validation-errors class="mb-4" />

  <form @submit.prevent="submit">
    <div>
      <breeze-label
        for="email"
        value="Email"
      />
      <breeze-input
        id="email"
        v-model="form.email"
        type="email"
        class="mt-1 block w-full"
        required
        autofocus
        autocomplete="username"
      />
    </div>

    <div class="mt-4">
      <breeze-label
        for="password"
        value="Password"
      />
      <breeze-input
        id="password"
        v-model="form.password"
        type="password"
        class="mt-1 block w-full"
        required
        autocomplete="new-password"
      />
    </div>

    <div class="mt-4">
      <breeze-label
        for="password_confirmation"
        value="Confirm Password"
      />
      <breeze-input
        id="password_confirmation"
        v-model="form.password_confirmation"
        type="password"
        class="mt-1 block w-full"
        required
        autocomplete="new-password"
      />
    </div>

    <div class="flex items-center justify-end mt-4">
      <breeze-button
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Reset Password
      </breeze-button>
    </div>
  </form>
</template>

<script>
import BreezeButton from '@/Components/Button';
import BreezeGuestLayout from '@/Layouts/Guest';
import BreezeInput from '@/Components/Input';
import BreezeLabel from '@/Components/Label';
import BreezeValidationErrors from '@/Components/ValidationErrors';

export default {

  components: {
    BreezeButton,
    BreezeInput,
    BreezeLabel,
    BreezeValidationErrors,
  },
  layout: BreezeGuestLayout,

  props: {
    email: String,
    token: String,
  },

  data() {
    return {
      form: this.$inertia.form({
        token: this.token,
        email: this.email,
        password: '',
        password_confirmation: '',
      }),
    };
  },

  methods: {
    submit() {
      this.form.post(this.route('password.update'), {
        onFinish: () => this.form.reset('password', 'password_confirmation'),
      });
    },
  },
};
</script>
