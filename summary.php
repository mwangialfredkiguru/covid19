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
                                            <th>flag</th>
                                            <th>Cases</th>
                                            <th>todayCases</th>
                                            <th>deaths</th>
                                            <th>todayDeaths</th>
                                            <th>recovered</th>
                                            <th>active</th>
                                            <th>critical</th>
                                            <th>As At</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        /*.$data[$x] -> countryInfo -> iso3 .*/
                                        error_reporting(0);
                                        include 'api.php';
                                         $data =  json_decode(ReturnAllCases(), false);
                                         for ($x = 0; $x <= count($data); $x++)
                                         {
                                           $epochTime = $data[$x] -> critical ;
                                            print_r('
                                            <tr>
                                                <td>'.($data[$x] -> country) .'</td>
                                                <td>  <img src="'.$data[$x] -> countryInfo -> flag .'" height="42" width="42"></td>
                                                <td>'.$data[$x] -> cases .'</td>
                                                <td>'.$data[$x] -> todayCases. ' </td>
                                                <td>'.$data[$x] -> deaths .'</td>
                                                <td>'.$data[$x] -> todayDeaths .'</td>
                                                <td>'.$data[$x] -> recovered. ' </td>
                                                <td>'.$data[$x] -> active .'</td>
                                                <td>'.$data[$x] -> critical .'</td>
                                                <td>'.date('Y-m-d H:i:s', $epochTime) .'</td>
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
        <!--  END CONTENT AREA  -->


<?php include 'footer.php'; ?>
