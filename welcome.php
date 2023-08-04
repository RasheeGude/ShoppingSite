<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    
    exit;
}

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Home</title>
    </head>
    <body>
        <?php require '<partials/_nav.php' ?>
        
      
        <div class="container">
            <div class="row align-items-center mt-5">
                <h1 class="px-0">Search for Schemes here</h1>
            </div>
            <div class="row align-items-center my-3 fw-bold">Select</div>
            <form action="process-options.php" method="post">
                <div class="row align-items-start text-center">
                    <div class="col-3 ps-0">
                        <label>
                        Type of Disability
                        <select
                            class="form-select"
                            aria-label="Select Type of Disability"
                            id="Dtype"
                            name="Dtype"
                        >
                            <option value="Low Vision">Low Vision</option>
                            <option value="Lack of Vision">Lack of Vision</option>
                            <option value="Leprosy Cured">Leprosy Cured</option>
                            <option value="Hearing Impairment">Hearing Impairment</option>
                        </select></label>
                    </div>

                    <div class="col-3 px-2">
                        <label
                        >Family Income
                        <select
                            class="form-select"
                            aria-label="Select Family Income"
                            id="income"
                            name="income"
                        >
                            <option value="Rs. 30,000 and Below">Rs. 30,000 and Below</option>
                            <option value="Between 30,000 and 1.2 lakhs" selected>Between 30,000 and 1.2 lakhs</option>
                            <option value="Between Rs. 1.2 Lakh and Rs. 1.5 Lakh">Between Rs. 1.2 Lakh and Rs. 1.5 Lakh</option>
                            <option value="Rs. 1.5 Lakh and Above">Rs. 1.5 Lakh and Above</option>
                        </select></label>
                    </div>

                    <div class="col-4">
                        <label for="PerD" class="form-label"
                        >Percentage of Disability</label>
                        <input
                        type="range"
                        class="form-range"
                        min="0"
                        max="100"
                        id="PerD"
                        value="40"
                        name="perD"
                        />
                    </div>

                    <div class="col">
                        <button
                        type="submit"
                        class="btn btn-outline-dark"
                        aria-placeholder="Search for Scheme"
                        >
                        Search
                        </button>
                    </div>
                </div>

                <div class="row py-5">
                    <div class="col-3 ps-0">
                        <label class="form-check-label" for="resident">
                        Resident of Goa
                        </label>

                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="resident"
                                name="Resident"
                                checked
                            />
                        </div>
                    </div>

                    <div class="col">
                        <label class="form-btn-group" for="age"> Age </label>
                        <div
                        class="btn-group"
                        role="group"
                        id="age"
                        aria-label="Basic radio toggle button group"
                        >
                        <input
                            type="radio"
                            class="btn-check"
                            name="btnradio"
                            id="btnradio1"
                            autocomplete="off"
                            value="0-6"
                        />
                        <label class="btn btn-outline-primary" for="btnradio1">0-6</label>

                        <input
                            type="radio"
                            class="btn-check"
                            name="btnradio"
                            id="btnradio2"
                            autocomplete="off"
                            value="7-15"
                        />
                        <label class="btn btn-outline-primary" for="btnradio2"
                            >7-15</label
                        >

                        <input
                            type="radio"
                            class="btn-check"
                            name="btnradio"
                            id="btnradio3"
                            autocomplete="off"
                            value="16-30"
                        />
                        <label class="btn btn-outline-primary" for="btnradio3"
                            >16-30</label
                        >
                        <input
                            type="radio"
                            class="btn-check"
                            name="btnradio"
                            id="btnradio4"
                            autocomplete="off"
                            checked
                            value="31-58"
                        />
                        <label class="btn btn-outline-primary" for="btnradio4"
                            >31-58</label
                        ><input
                            type="radio"
                            class="btn-check"
                            name="btnradio"
                            id="btnradio5"
                            autocomplete="off"
                            value="59 & Above"
                        />
                        <label class="btn btn-outline-primary" for="btnradio5"
                            >59 & Above</label
                        >
                        </div>
                    </div>

                    <div class="col">
                        <label class="form-btn-group" for="form-check-input"
                        >Category</label
                        >
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault1"
                                value="All"
                            />
                            <label class="form-check-label" for="flexRadioDefault1">
                                All
                            </label>
                        </div>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault2"
                                value="Education"
                            />
                            <label class="form-check-label" for="flexRadioDefault2">
                                Education
                            </label>
                        </div>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault3"
                                value="Health"
                            />
                            <label class="form-check-label" for="flexRadioDefault3">
                                Health
                            </label>
                        </div>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="flexRadioDefault"
                                id="flexRadioDefault4"
                                checked
                                value="Finance"
                            />
                            <label class="form-check-label" for="flexRadioDefault4">
                                Finance
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-check form-switch">
                        <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        id="AccessMode"
                        name="accessM"
                        checked
                        />
                        <label class="form-check-label" for="AccessMode"
                        >Accessibility Mode</label
                        >
                    </div>
                </div>
            </form>
        </div>

 


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>