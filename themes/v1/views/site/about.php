<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* @var $model app\models\Page */
/* @var $this app\components\View */

$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;

/** SEO */
$this->registerMetaTag([
    'http-equiv' => 'Content-Type',
    'content' => 'text/html; charset=utf-8'
]);
$this->registerLinkAlternate();
$this->registerLinkCanonical();
$this->registerMetaTitle();
$this->registerMetaKeywords($model->metakey);
$this->registerMetaDescription($model->metadesc);
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'noindex,nofollow',
]);
$socialMedia = [
    'title' => $this->title .' - '. Yii::$app->name,
    'description' => $model->metadesc,
];
$this->registerMetaSocialMedia($socialMedia);

?>

<section class="section-padding">
    <?= $model->description ?>
</section>
    <section class="section-padding gray-bg">

        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Awesome Team</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <a href="#"><img src="assets/img/team/team-6.jpg" class="img-responsive" alt="Image"></a>
                        </div><!-- /.team-img -->

                        <div class="team-title">
                            <h3><a href="#">Jonathan Smith</a></h3>
                            <span>ceo &amp; founder</span>
                            <p>A id a torquent tortor at lacus et donec platea eu scelerisque maecenas ac eros a adipiscing id lobortis cum lacus erat. </p>
                        </div><!-- /.team-title -->

                        <ul class="team-social-links list-inline text-center">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                        </ul>

                    </div><!-- /.team-wrapper -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <a href="#"><img src="assets/img/team/team-7.jpg" class="img-responsive" alt="Image"></a>
                        </div><!-- /.team-img -->

                        <div class="team-title">
                            <h3><a href="#">brauns hizzle doe</a></h3>
                            <span>front end developer</span>
                            <p>A id a torquent tortor at lacus et donec platea eu scelerisque maecenas ac eros a adipiscing id lobortis cum lacus erat. </p>
                        </div><!-- /.team-title -->

                        <ul class="team-social-links list-inline text-center">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                        </ul>

                    </div><!-- /.team-wrapper -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <a href="#"><img src="assets/img/team/team-11.jpg" class="img-responsive" alt="Image"></a>
                        </div><!-- /.team-img -->

                        <div class="team-title">
                            <h3><a href="#">Jonathan Smith</a></h3>
                            <span>Product Designer</span>
                            <p>A id a torquent tortor at lacus et donec platea eu scelerisque maecenas ac eros a adipiscing id lobortis cum lacus erat. </p>
                        </div><!-- /.team-title -->

                        <ul class="team-social-links list-inline text-center">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                        </ul>

                    </div><!-- /.team-wrapper -->
                </div><!-- /.col-md-4 -->


            </div><!-- /.row -->
        </div><!-- /.clients-grid -->

    </div><!-- /.container -->
</section>
    <section class="section-padding">
        <div class="container">

            <div class="text-center mb-50">
                <h2>Progress Bar Two</h2>
                <p>Dolores eos qui ratione voluptatem sequi nesciunt.</p>
            </div>

            <div class="row">

              <div class="col-sm-6">
                  <div class="progress-section">
                      <span class="progress-title">Web Design</span>
                      <div class="progress">
                          <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                              <span>90%</span>
                          </div>
                      </div><!-- /.progress -->
                  </div> <!-- progress-section end -->

                  <div class="progress-section">
                      <span class="progress-title">Mobile Interface</span>
                      <div class="progress">
                          <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                              <span>86%</span>
                          </div>
                      </div>
                  </div> <!-- progress-section end -->

                  <div class="progress-section">
                      <span class="progress-title">Mobile Interface</span>
                      <div class="progress">
                          <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                              <span>86%</span>
                          </div>
                      </div>
                  </div> <!-- progress-section end -->
              </div><!-- /.col-md-6 -->

              <div class="col-sm-6">
                  <div class="progress-section">
                      <span class="progress-title">Web Design</span>
                      <div class="progress">
                          <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                              <span>90%</span>
                          </div>
                      </div>
                  </div> <!-- progress-section end -->

                  <div class="progress-section">
                      <span class="progress-title">Mobile Interface</span>
                      <div class="progress">
                          <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                              <span>86%</span>
                          </div>
                      </div>
                  </div> <!-- progress-section end -->

                  <div class="progress-section">
                      <span class="progress-title">Mobile Interface</span>
                      <div class="progress">
                          <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                              <span>86%</span>
                          </div>
                      </div>
                  </div> <!-- progress-section end -->
              </div><!-- /.col-md-6 -->

            </div><!-- /.row -->

        </div><!-- /.container -->
    </section>

    <section class="section-padding">
        <div class="container">
          <div class="text-center mb-80">
              <h2 class="section-title text-uppercase">Our Clients</h2>
              <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
          </div>

          <div class="clients-grid grid-gutter">
            <div class="row">

              <div class="col-md-3 col-sm-6">
                  <div class="border-box">
                      <a href="#">
                        <img src="assets/img/client-logo/intel.png" alt="clients">
                      </a>
                  </div><!-- /.border-box -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 col-sm-6">
                  <div class="border-box">
                      <a href="#">
                        <img src="assets/img/client-logo/envato.png" alt="clients">
                      </a>
                  </div><!-- /.border-box -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 col-sm-6">
                  <div class="border-box">
                      <a href="#">
                        <img src="assets/img/client-logo/studio.png" alt="clients">
                      </a>
                  </div><!-- /.border-box -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 col-sm-6">
                  <div class="border-box">
                      <a href="#">
                        <img src="assets/img/client-logo/google.png" alt="clients">
                      </a>
                  </div><!-- /.border-box -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 col-sm-6">
                  <div class="border-box">
                      <a href="#">
                        <img src="assets/img/client-logo/kp.png" alt="clients">
                      </a>
                  </div><!-- /.border-box -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 col-sm-6">
                  <div class="border-box">
                      <a href="#">
                        <img src="assets/img/client-logo/dell.png" alt="clients">
                      </a>
                  </div><!-- /.border-box -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 col-sm-6">
                  <div class="border-box">
                      <a href="#">
                        <img src="assets/img/client-logo/sw.png" alt="clients">
                      </a>
                  </div><!-- /.border-box -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 col-sm-6">
                  <div class="border-box">
                      <a href="#">
                        <img src="assets/img/client-logo/hp.png" alt="clients">
                      </a>
                  </div><!-- /.border-box -->
              </div><!-- /.col-md-3 -->

            </div><!-- /.row -->
          </div><!-- /.clients-grid -->

        </div><!-- /.container -->
    </section>