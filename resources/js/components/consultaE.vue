<template>
  <div class="container">
    <h2>componente consulta estetica</h2>





    <!-- A partir de aqui empieza el modal de reserva ahora -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDiscount">
      Launch
      modal
    </button>

    <!--Modal: modalDiscount-->
    <div
      class="modal fade right"
      id="modalDiscount"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
      data-backdrop="true"
    >
      <div
        class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger"
        role="document"
      >
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <p class="heading">
              Discount offer:
              <strong>10% off</strong>
            </p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>

          <!--Body-->
          <div class="modal-body">
            <div class="row">
              <div class="col-3">
                <p></p>
                <p class="text-center">
                  <i class="fas fa-gift fa-4x"></i>
                </p>
              </div>

              <div class="col-9">
                <p>
                  Sharing is caring. Therefore, from time to time we like to give our visitors small gifts. Today is
                  one of those days.
                </p>
                <p>
                  <strong>
                    Copy the following code and use it at the checkout. It's valid for
                    <u>one day</u>.
                  </strong>
                </p>
                <h2>
                  <span class="badge">v52gs1</span>
                </h2>
              </div>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer flex-center">
            <a href="https://mdbootstrap.com/products/jquery-ui-kit/" class="btn btn-danger">
              Get it
              now
              <i class="far fa-gem ml-1 white-text"></i>
            </a>
            <a
              type="button"
              class="btn btn-outline-danger waves-effect"
              data-dismiss="modal"
            >No, thanks</a>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!--Modal: modalDiscount-->
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component consulta estetica mounted.");
  }
};
</script>

<style >
.container {
  margin-top: 25px;
}
</style>