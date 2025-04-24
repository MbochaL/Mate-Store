<style>
  /* Estilos personalizados para la página de comercialización */
  .comercializacion-page {
    padding: 3rem 0;
    color: #59220e;
  }
  
  .page-title {
    color: #59220e;
    font-weight: 700;
    position: relative;
    display: inline-block;
    padding-bottom: 15px;
    margin-bottom: 2rem;
  }
  
  .page-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background-color: #f2efbb;
  }
  
  .section-title {
    color: #59220e;
    font-weight: 600;
    margin-bottom: 1.5rem;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
  }
  
  .section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background-color: #f2efbb;
  }
  
  .info-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(89, 34, 14, 0.1);
    padding: 2rem;
    height: 100%;
    transition: all 0.3s ease;
    border-top: 4px solid #f2efbb;
  }
  
  .info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(89, 34, 14, 0.15);
  }
  
  .info-item {
    display: flex;
    margin-bottom: 1.5rem;
    align-items: flex-start;
  }
  
  .info-item:last-child {
    margin-bottom: 0;
  }
  
  .info-icon {
    background-color: #f2efbb;
    color: #59220e;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    font-size: 1.2rem;
    flex-shrink: 0;
  }
  
  .info-content {
    flex-grow: 1;
  }
  
  .info-title {
    font-weight: 600;
    margin-bottom: 0.3rem;
    color: #59220e;
  }
  
  .info-text {
    margin-bottom: 0;
    color: #59220e;
    opacity: 0.9;
  }
  
  .section-divider {
    height: 2px;
    background-color: rgba(242, 239, 187, 0.5);
    margin: 3rem 0;
  }
  
  .bg-light-accent {
    background-color: rgba(242, 239, 187, 0.2);
  }
</style>

<div class="comercializacion-page bg-light-accent">
  <div class="container py-5">
    <div class="text-center mb-5">
      <h1 class="page-title display-5">Comercialización</h1>
      <p class="lead">Conocé todas las opciones disponibles para recibir tu producto</p>
    </div>

    <div class="row g-4 mb-5">
      <!-- Tipos de Entregas -->
      <div class="col-md-6">
        <div class="info-card">
          <h2 class="section-title">Tipos de Entregas</h2>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-truck"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Entrega estándar</h3>
              <p class="info-text">Recibí tu pedido en 3-5 días hábiles en cualquier punto del país.</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-lightning-charge-fill"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Entrega exprés</h3>
              <p class="info-text">Envío prioritario en 24 horas para pedidos realizados antes de las 12 hs.</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-calendar-event"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Entrega programada</h3>
              <p class="info-text">Elegí la fecha y hora que mejor se adapte a tu agenda.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Formas de Envío -->
      <div class="col-md-6">
        <div class="info-card">
          <h2 class="section-title">Formas de Envíos</h2>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-house-door"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Envío a domicilio</h3>
              <p class="info-text">Recibí tu pedido directamente en la puerta de tu casa u oficina.</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-shop"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Retiro en sucursal</h3>
              <p class="info-text">Pasá por nuestra tienda y retirá tu pedido cuando te quede cómodo.</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-globe"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Envío internacional</h3>
              <p class="info-text">Llevamos nuestros productos a cualquier parte del mundo.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-divider"></div>

    <div class="row g-4">
      <!-- Formas de Pago -->
      <div class="col-md-6">
        <div class="info-card">
          <h2 class="section-title">Formas de Pagos</h2>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-credit-card"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Tarjeta de crédito</h3>
              <p class="info-text">Aceptamos Visa, Mastercard, American Express y más. Hasta 12 cuotas sin interés.</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-cash-coin"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Pagos en efectivo</h3>
              <p class="info-text">Pagá en nuestra sucursal o a través de Rapipago, Pago Fácil y otros medios habilitados.</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-bank"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Transferencia bancaria</h3>
              <p class="info-text">Realizá el pago mediante transferencia electrónica a nuestra cuenta.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Información Útil -->
      <div class="col-md-6">
        <div class="info-card">
          <h2 class="section-title">Información Útil</h2>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-box-seam"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Seguimiento de Pedidos</h3>
              <p class="info-text">Una vez despachado, recibirás un correo con el número de seguimiento para rastrear tu pedido en tiempo real.</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-arrow-repeat"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Cambios y Devoluciones</h3>
              <p class="info-text">Tenés hasta 10 días para solicitar un cambio o devolución, conservando el producto en condiciones originales.</p>
            </div>
          </div>
          
          <div class="info-item">
            <div class="info-icon">
              <i class="bi bi-headset"></i>
            </div>
            <div class="info-content">
              <h3 class="info-title">Atención al Cliente</h3>
              <p class="info-text">Nuestro equipo está disponible de lunes a viernes de 9 a 18 hs para asesorarte a través del formulario de contacto o nuestras redes sociales.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sección adicional de preguntas frecuentes -->
    <div class="mt-5 pt-4 text-center">
      <div class="d-inline-block bg-white p-3 rounded-3 shadow-sm">
        <p class="mb-0">
          <i class="bi bi-question-circle me-2" style="color: #59220e;"></i>
          <span class="fw-bold">¿Tenés más preguntas?</span> Visitá nuestra sección de 
          <a href="contacto" class="text-decoration-none" style="color: #59220e; border-bottom: 1px dashed #f2efbb;">Contacto</a>
        </p>
      </div>
    </div>
  </div>
</div>