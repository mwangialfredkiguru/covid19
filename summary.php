<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>


<!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
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
                                        error_reporting(0);
                                        include 'api.php';
                                         $data =  json_decode(ReturnAllCases(), false);
                                         for ($x = 0; $x <= count($data); $x++)
                                         {
                                            print_r('
                                            <tr>
                                                <td>'.($data[$x] -> country) .'</td>
                                                <td>'.$data[$x] -> countryInfo -> iso3 .'<a href="'.$data[$x] -> countryInfo -> flag .'"></a></td>
                                                <td>'.$data[$x] -> cases .'</td>
                                                <td>'.$data[$x] -> todayCases. ' </td>
                                                <td>'.$data[$x] -> deaths .'</td>
                                                <td>'.$data[$x] -> todayDeaths .'</td>
                                                <td>'.$data[$x] -> recovered. ' </td>
                                                <td>'.$data[$x] -> active .'</td>
                                                <td>'.$data[$x] -> critical .'</td>
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
        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->


<?php include 'footer.php'; ?>
