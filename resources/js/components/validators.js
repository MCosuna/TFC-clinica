// validators.js
export function isNameJoe(value) {
    if (!value) return true;
    return value === "Joe";
  }
  
  export function notGmail(value = "") {
    return !value.includes("gmail");
  }
  
  export function isEmailAvailable(value) {
    if (value === "") return true;
  
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve(value.length > 10);
      }, 500);
    });
  }
  
  // formComponent.vue
  import { required, email } from "vuelidate/lib/validators";
  import { isNameJoe, notGmail, isEmailAvailable } from "@/validators";
  
  export default {
    name: "FormComponent",
  
    data() {
      return {
        form: {
          name: "",
          email: ""
        }
      };
    },
  
    validations: {
      form: {
        name: { required, isJoe: isNameJoe },
        email: { required, email, notGmail, isEmailAvailable }
      }
    },
  
    methods: {
      submit() {
        this.$v.form.$touch();
        // if its still pending or an error is returned do not submit
        if (this.$v.form.$pending || this.$v.form.$error) return;
        // to form submit after this
        alert("Form submitted");
      }
    }
  };