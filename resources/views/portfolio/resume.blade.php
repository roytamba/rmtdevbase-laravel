@extends('welcome')
@section('content')
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                        <!-- Download resume button-->
                        <a class="btn btn-primary px-4 py-3" href="{{ route('download.cv') }}"
                            target="_blank">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Resume
                        </a>
                    </div>
                    <!-- Experience Cards-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">2024 - Present</div>
                                        <div class="small fw-bolder">Software Developer (Java)</div>
                                        <div class="small text-muted">PT. Bisnis Teknologi Manajemen / Bizmann PTE LTD</div>
                                        <div class="small text-muted">Kepulauan Riau, Batam / Singapore</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        Responsible for developing backend applications using Java and implementing new
                                        features based on user requirements. I also managed and resolved issues reported
                                        through tickets to ensure the system operates optimally and without disruptions.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">2024 - 2025</div>
                                        <div class="small fw-bolder">Technical Support (Java)</div>
                                        <div class="small text-muted">PT. Bisnis Teknologi Manajemen / Bizmann PTE LTD</div>
                                        <div class="small text-muted">Kepulauan Riau, Batam / Singapore</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        Served as a technical support specialist for industrial printing machines,
                                        responsible for software deployment, system maintenance, and resolving issues
                                        reported through support tickets. Regularly traveled to customer sites in Singapore
                                        to perform on-site deployments and provide hands-on technical assistance.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">2023 - 2024</div>
                                        <div class="small fw-bolder">Software Developer (PHP)</div>
                                        <div class="small text-muted">PT. Bisnis Teknologi Manajemen / Bizmann PTE LTD</div>
                                        <div class="small text-muted">Kepulauan Riau, Batam / Singapore</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        Responsible for developing web-based applications using PHP and implementing new
                                        features based on business requirements. Additionally, I handled and resolved issue
                                        tickets reported by QA teams or end-users to ensure the application runs smoothly
                                        and reliably.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">2022 - 2022</div>
                                        <div class="small fw-bolder">Internship - Fullstack (PHP)</div>
                                        <div class="small text-muted">Mc Dermott</div>
                                        <div class="small text-muted">Kepulauan Riau, Batam</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        Developed a web-based warehouse management system for the
                                        marine base area, allowing users to track item availability, usage by departments,
                                        and return schedules. The system included a request and approval workflow for
                                        inter-departmental item borrowing. I was also responsible for providing technical
                                        support for CCTV systems, including new installations, troubleshooting, and
                                        relocating cameras to active project areas to support field monitoring needs.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">2021 - 2022</div>
                                        <div class="small fw-bolder">Internship - Fullstack (PHP)</div>
                                        <div class="small text-muted">Politeknik Negeri Batam</div>
                                        <div class="small text-muted">Kepulauan Riau, Batam</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        Developed and maintained the Student Online Complaint System, allowing students to
                                        submit complaints online about academic and campus facility issues. Responsible for
                                        the design and development of the system. The system includes features like
                                        complaint management, notifications, and tracking of complaint statuses by students
                                        and the campus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    <!-- Education Cards -->

                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2024 - Present</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Bina Nusantara (Binus)</div>
                                            <div class="small text-muted">Jakarta</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">S1</div>
                                            <div class="small text-muted">Computer Science</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        Currently pursuing a Bachelor's degree in Computer Science with a focus on
                                        programming, data structures, software development, and modern technologies.
                                        Expected to graduate in 2026.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2019 - 2022</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Politeknik Negeri Batam</div>
                                            <div class="small text-muted">Kepulauan Riau, Batam</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">D3</div>
                                            <div class="small text-muted">Teknik Informatika</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        Completed an associate degree in Informatics Engineering with a focus on software
                                        development, web technologies, and basic networking.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <section>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">

                            <!-- Professional skills list -->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-tools"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional
                                            Skills</span></h3>
                                </div>

                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Spring Boot
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Database
                                            Management</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Technical
                                            Support & Maintenance</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">System
                                            Troubleshooting</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CCTV Setup &
                                            Configuration</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Languages list -->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Java</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP (Native,
                                            Laravel, CI)</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Next Js</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
