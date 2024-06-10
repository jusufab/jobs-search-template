<?php include_once('navbar.php') ?>
<main>
        <!-- Intro -->
        <div class="intro">
          <div class="container">
            <div class="intro-text">
              <h1>Looking for a job?<br><span class="green">we will help you</span></h1>
              <div class="check-out">
                <p>Check out our offers</p>
                <div class="form">
                  <div class="job-search">
                    <img style="width: 20px; margin-right: 30px;" src="img/icon/search-icon.svg" alt="">
                    <input type="text" placeholder="Bussines Category">
                  </div>
                  <div class="location">
                    <label for="lname">Country:</label>
                    <select name="location" id="location">
                      <option value="0">Wroclaw</option>
                      <option value="1">Kraków</option>
                      <option value="2">Warszawa</option>
                      <option value="3">Gdańsk</option>
                    </select>
                  </div>
                  <div class="location">
                    <label for="lname">City:</label>
                    <select name="location" id="location">
                      <option value="0">Wroclaw</option>
                      <option value="1">Kraków</option>
                      <option value="2">Warszawa</option>
                      <option value="3">Gdańsk</option>
                    </select>
                    <input class="search main-btn" type="submit" value="Search">
                    <input class="search main-btn" type="submit" value="Reset">

                  </div>
                </div>
                <div class="follow">
                  <span>Follow Us</span>
                  <a href=""><img src="img/icon/facebook-icon.svg" alt=""></a>
                  <a href=""><img src="img/icon/twitter-icon.svg" alt=""></a>
                  <a href=""><img src="img/icon/linkedin-icon.svg" alt=""></a>
                </div>
              </div>
            </div>
            <div class="intro-img">
            </div>
          </div>
        </div>
         <!--Search by category-->
        <div class="container">
        <div class="search-by">
          <h1>Search by <span class="green">category</span></h1>
            <!--Start carousel-->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
               <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state" src="img/icon/business-development.svg" alt="">
                        <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                      </div>
                      <p>Business<br>
                        Development</p>
                    </div> 
                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state" src="img/icon/graphic.svg" alt="">
                        <img class="hover" src="img/icon/graphic-hover.svg" alt="">
                      </div>
                      <p>Graphic<br>
                        Designer</p>
                    </div>
                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state" src="img/icon/pm.svg" alt="">
                        <img class="hover" src="img/icon/pm-hover.svg" alt="">
                      </div>
                      <p>Project<br>
                        Management</p>
                    </div>
                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state"src="img/icon/marketing.svg" alt="">
                        <img class="hover" src="img/icon/marketing-active.svg" alt="">
                      </div>
                      <p>Marketing &<br>
                        Communication</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state" src="img/icon/business-development.svg" alt="">
                        <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                      </div>
                      <p>Another<br>
                        Category</p>
                    </div> 
                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state" src="img/icon/business-development.svg" alt="">
                        <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                      </div>
                      <p>Another<br>
                        Category</p>
                    </div>
                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state"src="img/icon/business-development.svg" alt="">
                        <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                      </div>
                      <p>Another<br>
                        Category</p>
                    </div>
                    <div class="card-item">
                      <div class="photo">
                        <img class="main-state"src="img/icon/business-development.svg" alt="">
                        <img class="hover" src="img/icon/business-development-hover.svg" alt="">
                      </div>
                      <p>Another<br>
                        Category</p>
                    </div>
                  </div>
               </div>
               <div class="carousel-nav">
                <a class="nav-item" role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><img src="img/icon/prew-arrow.svg" alt=""></a>
                <a class="nav-item" role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><img src="img/icon/next-arrow.svg" alt=""></a>
               </div>
            </div>
        </div>
         <!--job offers-->
         <div class="job-offers">
    <h1>Job <span class="green">offers</span></h1>
    <a href="">All offers <img style="width: 20px; margin-left: 20px;" src="/img/icon/arrow-right-icon.svg" alt=""></a>
    <div class="row pt-5">
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
                <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="offert-wrapper">
            <div class="offert">
                    <div>
                        <div class="offert-description">
                            <div class="company-logo">
                                <img src="img/icon/social-road-icon.svg" alt="">
                            </div>
                            <div class="description">
                                <p class="company-name">Social Road</p>
                            </div>
                        </div>
                        <div class="offert-meta">
                            <p class="location">location: <span class="city">Albania</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Established year: <span class="city">2019 </span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Business Size: <span class="city">Small Bussines</span></p>
                        </div>
                        <div class="offert-meta">
                            <p class="location">Service Field: <span class="city">E-commerce</span></p>
                        </div>
                    </div>
                </div>
                <a href="" class="main-btn">See details</a>
            </div>
        </div>
    </div>
</div>

          <!--Top Notch Service-->
          <div class="service text-center">
            <h1>Top Notch <span class="green">Service</span></h1>
            <div class="service-items">
              <div class="item">
                <img src="img/icon/cv-icon.svg" alt="">
                <span class="counter">2 331</span>
                <span>Job offers</span>
              </div>
              <div class="item">
                <img src="img/icon/customers.svg" alt="">
                <span class="counter">1 148</span>
                <span>Satisfied customers</span>
              </div>
              <div class="item">
                <img src="img/icon/applications.svg" alt="">
                <span class="counter">5 364</span>
                <span>Applications sent</span>
              </div>
              <div class="item">
                <img src="img/icon/projects.svg" alt="">
                <span class="counter">1 764</span>
                <span>Realized projects</span>
              </div>
            </div>
          </div>
          <?php include_once('footer.php') ?>
