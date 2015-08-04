<?php
header('Access-Control-Allow-Origin: http://stonybrook.edu');
require_once('functions.php');

if (isset($_POST['data']) && $_POST['data'] != "") {
    $data = json_decode($_POST['data']);
    $startDate = date('Y-m-d', strtotime($data->startDate));
    $endDate = date('Y-m-d', strtotime($data->endDate));
    $metrics = $data->metrics;
    $include = $data->area;
    $filter = $data->filter;

    $siteUrl = 'http://stonybrook.edu/' . str_replace('\\','',($include.'/'.$filter));

    try {
        $temp = explode(",", $metrics);
    } catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage();
    }

    $sort = '-' . $temp[0];

    try {
        $results = queryAnalytics($startDate, $endDate, $metrics, $include, $sort, $filter);
    } catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage();
    }

    $headers = $results->getColumnHeaders();
    ?>

    <?php
    /* Get total pageviews */
    $totalViewCount = 0;
    $totalUniqueViewCount = 0;
    $totalBounceRate = 0;
    $totalItemCount = 0;
    foreach ($results->rows as $row) {
        $count = 0;
        foreach ($row as $item) {
            if ($headers[$count]->name == "ga:pageviews") {
                $totalViewCount = $totalViewCount + $item;
            } elseif ($headers[$count]->name == "ga:uniquePageviews") {
                $totalUniqueViewCount = $totalUniqueViewCount + $item;
            }
            $count++;
        }
        $totalItemCount++;
    }
    ?>


    <h4>Your Results</h4>
    <div class="clearfix">
        <p>
            <strong>Site URL:</strong> <a href="<?php echo($siteUrl); ?>" class="external-link url-break" target="_blank"><?php echo($siteUrl); ?></a><br />
            <strong>Start Date:</strong> <?php echo($startDate); ?><br />
            <strong>End Date:</strong> <?php echo($endDate); ?><br />
            <?php if($totalItemCount>0) { ?>
            <strong>Total Number of Pages:</strong> <?php echo($totalItemCount); ?><br />
            <?php } ?>
            <?php if($totalViewCount>0) { ?>
            <strong>Total Pageviews:</strong> <?php echo($totalViewCount); ?><br />
            <?php } ?>
            <?php if($totalUniqueViewCount>0) { ?>
            <strong>Total Unique Pageviews:</strong> <?php echo($totalUniqueViewCount); ?><br />
            <?php } ?>
        </p>
        <p>
            <button type="button" class="sbu-button clearfix search-button partial-print-trigger" data-partial-print-target="#target"><em class="fa fa-print"></em> Print Report</button>
        </p>
    </div>
    <table class="tablesaw tablesaw-stack light-grey-table" data-tablesaw-mode="stack" border="0" cellpadding="0" cellspacing="0" data-tablesaw-sortable>
        <tr>
            <?php
            foreach ($headers as $header) {
                switch ($header->name) {
                    case "ga:pageTitle":
                        ?>
                        <th data-tablesaw-sortable-col>Page Title</th>
                        <?php
                        break;
                    case "ga:pagePath":
                        ?>
                        <th class="page-path" data-tablesaw-sortable-col>Page Address</th>
                        <?php
                        break;
                    case "ga:pageviews":
                        ?>
                        <th data-tablesaw-sortable-col>Page Views</th>
                        <?php
                        break;
                    case "ga:uniquePageviews":
                        ?>
                        <th data-tablesaw-sortable-col>Unique Page Views</th>
                        <?php
                        break;
                    case "ga:avgTimeOnPage":
                        ?>
                        <th data-tablesaw-sortable-col>Avg. Time on Page</th>
                        <?php
                        break;
                    case "ga:entrances":
                        ?>
                        <th data-tablesaw-sortable-col>Entrances</th>
                        <?php
                        break;
                    case "ga:visitBounceRate":
                        ?>
                        <th data-tablesaw-sortable-col>Bounce Rate</th>
                        <?php
                        break;
                    case "ga:exitRate":
                        ?>
                        <th data-tablesaw-sortable-col>Exit Rate</th>
                        <?php
                        break;
                    default:
                        ?>
                        <th data-tablesaw-sortable-col></th>
                        <?php
                        break;
                }
            }
            ?>
        </tr>
        <?php
        $totalViewCount = 0;
        foreach ($results->rows as $row) {
            ?>
            <tr>
                <?php
                $count = 0;
                foreach ($row as $item) {
                    if ($headers[$count]->name == "ga:pageTitle") {
                        ?>
                        <td><?php echo $item; ?></td>
                    <?php
                    } elseif ($headers[$count]->name == "ga:pagePath") {
                        ?>
                        <td class="page-path"><a href="http://<?php echo $item; ?>" target="_blank"><?php echo $item; ?></a>
                        </td>
                    <?php
                    } elseif ($headers[$count]->name == "ga:visitBounceRate" || $headers[$count]->name == "ga:exitRate") {
                        ?>
                        <td><?php echo round($item, 2); ?>%</td>
                    <?php
                    } elseif ($headers[$count]->name == "ga:avgTimeOnPage") {
                        ?>
                        <td><?php echo number_format($item,2); ?></td>
                    <?php
                    } elseif ($headers[$count]->name == "ga:pageviews") {
                        $totalViewCount = $totalViewCount + $item;
                        ?>
                        <td><?php echo $item; ?></td>
                    <?php
                    } else {
                        ?>
                        <td><?php echo $item; ?></td>
                    <?php
                    }
                    $count++;
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}
?>