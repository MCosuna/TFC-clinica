<template>
  <div class="container">

        <!-- carousel con img de la clinica -->
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/silla.jpg" alt="Silla"  />
            </div>
            <div class="carousel-item">
              <img src="./img/pared.jpg" alt="pared" />
            </div>
            <div class="carousel-item">
              <img src="./img/maquina.jpg" alt="maquina" />
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
    <form
      v-if="showpaypal === false"
      autocomplete="nofill"
      @submit.prevent="submitDomain"
      method="POST"
      enctype="multipart/form-data"
    >
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input
            autocomplete="nofill"
            type="email"
            :class="{ 'is-invalid' : form.errors.has('email') }"
            class="form-control"
            id="inputEmail4"
            v-model="form.email"
            placeholder="ejemplo@ejemplo.com"
            @keydown="form.errors.clear('email')"
          />
          <div
            class="invalid-feedback"
            v-show="form.errors.has('email')"
            v-text="form.errors.get('email')"
          ></div>
        </div>
      </div>

      <div class="form-group">
        <label for="inputAddress">Nombre completo</label>
        <input
          autocomplete="nofill"
          type="text"
          :class="{ 'is-invalid' : form.errors.has('title') }"
          class="form-control"
          id="inputAddress"
          v-model="form.title"
          placeholder="Introduzca su nombre"
          @keydown="form.errors.clear('title')"
        />
        <div
          class="invalid-feedback"
          v-show="form.errors.has('title')"
          v-text="form.errors.get('title')"
        ></div>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Deja una descripción:</label>
        <input
          autocomplete="nofill"
          type="text"
          :class="{ 'is-invalid' : form.errors.has('shortdescription') }"
          class="form-control"
          id="inputAddress2"
          placeholder="Deje una descripción para el receptor"
          v-model="form.shortdescription"
          @keydown="form.errors.clear('shortdescription')"
        />
        <div
          class="invalid-feedback"
          v-show="form.errors.has('shortdescription')"
          v-text="form.errors.get('shortdescription')"
        ></div>
      </div>
      <div class="form-group">
        <textarea
          :class="{ 'is-invalid' : form.errors.has('description') }"
          class="form-control"
          id="description"
          name="description"
          placeholder="Deja una descripción"
          rows="7"
          v-model="form.description"
          @keydown="form.errors.clear('description')"
        ></textarea>
        <div
          class="invalid-feedback"
          v-show="form.errors.has('description')"
          v-text="form.errors.get('description')"
        ></div>

        <!-- <vue-editor v-model="form.description" /> -->
      </div>
      <div class="form-group">
        <label for>
          Para conseguir su bono ingrese:
          <span class="text-success">50€</span>
        </label>
      </div>
      <button type="submit" class="btn btn-success">Enviar</button>
    </form>
    <div class="container">
      <div class="row text-center">
        <div class="w-100 text-center">
          <h5
            class="mb-3 text-center"
          >Gracias por confiar en clinica Macia, su sonrisa es lo más importante</h5>
          <h5 class="mb-3 text-center">Por favor, ingrese 50€ para conseguir su bono</h5>
        </div>

        <div class="w-100" v-show="showpaypal === true">
          <div class="mx-auto w-50" ref="paypal"></div>
        </div>
      </div>
    </div>
    <div v-show="showpaypal === true & loadding === true" class="container">
      <div class="row text-center">
        <div class="w-100 text-center">
          <h5 class="text-center">Checking your payment please wait!</h5>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {

  data() {
    return {
      loaded: false,
      showpaypal: false,
      loadding: false,
      paidFor: false,
      product: {
        price: 50,
        description: "Mari Carmen Osuna"
      },
      form: new Form({
        email: "",
        title: "",
        shortdescription: "",
        description: ""
      })
    };
  },
  mounted: function() {
    const script = document.createElement("script");
    script.src =
      "YOUR-API-KEY";
    script.addEventListener("load", this.setLoaded);
    document.body.appendChild(script);
  },
  methods: {
    setLoaded: function(resp) {
      this.loaded = true;
      window.paypal
        .Buttons({
          createOrder: (data, actions) => {
            return actions.order.create({
              purchase_units: [
                {
                  description: this.product.description,
                  amount: {
                    currency_code: "USD",
                    value: this.product.price
                  }
                }
              ]
            });
          },
          onApprove: async (data, actions, resp) => {
            this.loadding = true;
            const order = await actions.order.capture();
            this.data;
            this.paidFor = true;
            this.loadding = false;
            window.location.href = "./consultaGeneral/";
            jQuery.support.cors = true;
          },
          onError: err => {
            console.log(err);
          }
        })
        .render(this.$refs.paypal);
    },
    submitDomain() {
      let data = new FormData();
      data.append("title", this.form.title);
      data.append("email", this.form.email);
      data.append("shortdescription", this.form.shortdescription);
      data.append("description", this.form.description);

      axios
        .post("/consultaGeneral", data)
        .then(response => {
          this.title = "";
          this.form.reset();
          this.showpaypal = true;
          this.resp = response.data;
        })
        .catch(error => this.form.errors.record(error.response.data));
    }
  },
  computed: {
    filteredSubcategories: function() {
      return this.subcategories.filter(
        item => item.category_id == this.form.category_id
      );
    }
  }
};
</script>

<style >
.container {
  margin-top: 25px;
}

.carousel-inner img {
    width: 100%;

    height: -webkit-fill-available;
}
</style>