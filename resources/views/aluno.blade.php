
  @extends ('template.template1')

  @section('content')

  <div class="container">
    <div class="col-md-12">
    <form id="contact" action="" method="post">
      <h3>Cadastro de Aluno</h3>
      <h4></h4>
      <fieldset>
        <input placeholder="Your name" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Your Email Address" type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
      </fieldset>
      <fieldset>
        <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </fieldset>
      <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
    </form>
  </div>
  </div>


  @endsection
