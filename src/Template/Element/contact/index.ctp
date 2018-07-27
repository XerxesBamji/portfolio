<section class="contact-section h-100">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-lg-6 col-md-6 col-sm-12 my-auto">
        <div class="title-wrapper my-auto text-light pl-5">
          <h1 class="mt-0 mb-1 animated fadeInLeftBig intro font-weight-bold txt-primary" data-in-effect="rollIn">Contact Me</h1>
          <p>If you have any questions, or want to work with me. Feel free to email me using the form below, or email me at <a class="txt-primary" href="mailto:xerxes.bamji@hotmail.com" >xerxes.bamji@hotmail.com</a></p>
          <?= $this->Form->create($contact); ?>
            <?php echo $this->Form->input('name', array('type' => 'text','class' => 'form-name','label' => '', 'placeholder' => 'Name', 'required' => true)); ?>
            <?php echo $this->Form->input('subject', array('type' => 'text','class' => 'form-subject','label' => '', 'placeholder' => 'Subject', 'required' => true)); ?>
            <?php echo $this->Form->input('email', array('type' => 'email','class' => 'form-email','label' => '', 'placeholder' => 'Email', 'required' => true)); ?>
            <?php echo $this->Form->input('message', array('type' => 'textarea','class' => 'form-message','label' => '', 'placeholder' => 'Message', 'required' => true)); ?>
            <?php echo $this->Form->submit('Send', array('class' => 'form-submit pull-right')); ?>
          <?= $this->Form->end(); ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 my-auto pr-2 text-center">
        <div class="sharethis-inline-reaction-buttons"></div>
        <p class="text-light">Have a spare second? Let me know what you think of my site?</p>
        </div>
      </div>
    </div>
  </div>
</section>
