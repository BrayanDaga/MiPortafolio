            <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h2 class="mt-0 text-center">Mi portafolio</h2>
                <hr class="my-4 divider" />
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    @foreach ($projects as $project)
                    <div class="mb-5 col-md-6 col-lg-4">
                        <div class="mx-auto portfolio-item" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="text-center text-white portfolio-item-caption-content"><svg class="svg-inline--fa fa-plus fa-w-14 fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> Font Awesome fontawesome.com --></div>
                            </div>
                            <img class="img-fluid" src="{{ asset($project->image) }}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    <!-- Portfolio Modal -->

@foreach ($projects as $project)
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="text-center modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="mb-0 portfolio-modal-title text-secondary text-uppercase" id="portfolioModal1Label">{{ $project->title }}</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="mb-5 rounded img-fluid" src="{{ asset($project->image) }}" alt="" />
                            <!-- Portfolio Modal - Text-->

                            <p class="mb-5">{{ $project->desc }}</p>
                            <div class="flex-row mb-5 d-flex justify-content-around">
                                <a href="{{ $project->git }}" target="_blank" class="btn btn-secondary"> <i class="fas fa-code-branch"></i> Codigo fuente </a>
                                <a href="{{ $project->demo }}" target="_blank" class="btn btn-info"> <i class="fas fa-eye"></i> Demo</a>
                            </div>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
