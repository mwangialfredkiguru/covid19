<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<?php include 'api.php'; ?>
<?php
 $data =  json_decode(ReturnCovid19Summary(), false);
 $CountryName = 'Kenya';
 $dataCountry = json_decode(ReturnCasesByCountryName($CountryName), false);
?>
<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>N-Cov19 Analytics</h3>
            </div>
            <div class="page-title">
                <h3>Today: <?php date_default_timezone_set("Africa/Nairobi"); print_r(date("h:i:sa")); ?></h3>
            </div>
        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-four">

                    <div class="widget-content">
                        <div class="vistorsBrowser">
                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line></svg>
                                </div>
                                <div class="w-browser-details">
                                    <div class="w-browser-info">
                                        <h6>Cases (<?php echo $CountryName; ?>)</h6>
                                        <p class="browser-count"><?php print_r(number_format($dataCountry -> cases)) ?> </p>
                                    </div>
                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 100%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                                </div>
                                <div class="w-browser-details">

                                    <div class="w-browser-info">
                                        <h6>Deaths (<?php echo $CountryName; ?>)</h6>
                                        <p class="browser-count"><?php print_r(number_format($dataCountry -> deaths)) ?></p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 100%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                                <p class="w-value"><?php print_r(number_format($data -> cases)) ?></p>
                                <h5 class="">Cases</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                </div>
                                <p class="w-value"><?php print_r(number_format($data -> deaths)) ?></p>
                                <h5 class="">Deaths</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                </div>
                                <p class="w-value"><?php print_r(number_format($data -> recovered)) ?></p>
                                <h5 class="">Recovered</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>flag</th>
                                    <th>Cases</th>
                                    <th>todayCases</th>
                                    <th>deaths</th>
                                    <th>todayDeaths</th>
                                    <th>recovered</th>
                                    <th>active</th>
                                    <th>critical</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                /*.$data[$x] -> countryInfo -> iso3 .*/
                                error_reporting(0);
                                //include 'api.php';
                                 $allData =  json_decode(ReturnAllCases(), false);
                                 for ($x = 0; $x <= count($allData) -1; $x++)
                                 {
                                   $epochTime = $allData[$x] -> critical;
                                   $dt = new DateTime("@$epochTime");
                                    print_r('
                                    <tr>
                                        <td>'.$allData[$x] -> country .'</td>
                                        <td>'.$allData[$x] -> countryInfo -> iso3 .'</td>
                                        <td>'.number_format($allData[$x] -> cases) .'</td>
                                        <td>'.number_format($allData[$x] -> todayCases) . ' </td>
                                        <td>'.number_format($allData[$x] -> deaths) .'</td>
                                        <td>'.number_format($allData[$x] -> todayDeaths) .'</td>
                                        <td>'.number_format($allData[$x] -> recovered) .' </td>
                                        <td>'.number_format($allData[$x] -> active) .'</td>
                                        <td>'.number_format($allData[$x] -> critical) .'</td>
                                    </tr>
                                    ');
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
<!--  END CONTENT PART  -->

<?php include 'footer.php'; ?>
