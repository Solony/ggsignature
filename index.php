<!<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <script data-require="jquery@2.2.4" data-semver="2.2.4" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link data-require="bootstrap@3.3.7" data-semver="3.3.7" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script data-require="bootstrap@3.3.7" data-semver="3.3.7" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css" />
<script type="text/javascript">
var show = false;
var show_report = false;
function openNav() {
    document.getElementById("control-panel").style.width = "500px";
    document.getElementById("control-panel").style.paddingLeft = "12px";
    // if (show) {
    //     document.getElementById("control-panel").style.width = "500px";
    //     document.getElementById("control-panel").style.paddingLeft = "12px";
    // } else {
    //     document.getElementById("control-panel").style.width = "0px";
    //     document.getElementById("control-panel").style.paddingLeft = "0px";
    // }

}
function mousePosition(event) {
    x = event.clientX;
    if (x <= window.innerWidth / 3) {
        show = true;
    } else {
        show = false;
    }
    openNav();
}
</script>
<!-- data.php是蛋白質的raw data -->
<?php include 'data.php'; ?>
<body onmousemove="mousePosition(event)">
    <div id="container">
        <div id="control-panel" class="flex flex-column">
            <!-- First Row -->
            <h3>Virus</h3>
            <div class="flex">
                <select id="Virus-selector" class="selectpicker show-tick">
                    <?php foreach ($main_virus as $virus): ?>
                        <option value="<?= $virus; ?>"><?= $virus; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <!-- First Row -->
            <!-- Second Row -->
            <h3>Reference</h3>
            <div class="flex end">
                <div class="dropdown flex-row">
                    <p>Species</p>
                    <select id="ref-Species-selector" class="selectpicker show-tick">
                        <?php foreach ($virus_species as $species => $geno): ?>
                            <option value="<?= $species; ?>"><?= $species; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="dropdown flex-row">
                    <p>Genotype</p>
                    <select id="ref-Genotype-selector" class="selectpicker show-tick" multiple>
                        <?php foreach ($virus_species['EV-A'] as $geno): ?>
                            <option value="<?= $geno; ?>"><?= $geno; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- Second Row -->
            <!-- Third Row -->
            <h3>Target #1</h3>
            <div class="flex end">
                <div class="dropdown flex-row">
                    <p>Species</p>
                    <select id="t1-Species-selector" class="selectpicker show-tick">
                        <?php foreach ($virus_species as $species => $geno): ?>
                            <option value="<?= $species; ?>"><?= $species; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="dropdown flex-row">
                    <p>Genotype</p>
                    <select id="t1-Genotype-selector" class="selectpicker show-tick" multiple>
                        <?php foreach ($virus_species['EV-A'] as $geno): ?>
                            <option value="<?= $geno; ?>"><?= $geno; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- Third Row -->
            <!-- Fourth Row -->
            <h3>Target #2</h3>
            <div class="flex end">
                <div class="dropdown flex-row">
                    <p>Species</p>
                    <select id="t2-Species-selector" class="selectpicker show-tick" data-container="body">
                        <?php foreach ($virus_species as $species => $geno): ?>
                            <option value="<?= $species; ?>"><?= $species; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="dropdown flex-row">
                    <p>Genotype</p>
                    <select id="t2-Genotype-selector" class="selectpicker show-tick" multiple data-container="body">
                        <?php foreach ($virus_species['EV-A'] as $geno): ?>
                            <option value="<?= $geno; ?>"><?= $geno; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- Fourth Row -->
            <!-- Fifth Row -->
            <h3>Segment</h3>
            <div class="flex">
                <div class="dropdown">
                    <select id="Seg-selector" class="selectpicker show-tick" data-container="body">
                        <?php foreach ($seg as $se): ?>
                            <option value="<?= $se; ?>"><?= $se; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- Fifth Row -->
            <!-- Control panel -->
            <div id="report-panel" class="flex last-row flex flex-column">
                <h3>Control Panel</h3>
                <!-- <div class="flex flex-row">
                    <span>Report</span>
                    <div class="manual-margin">
                        <textarea class="form-control rounded-0" id="report-area" rows="2"></textarea>
                    </div>
                </div> -->
                <div class="flex flex-row">
                    <span>Download Seq. File</span>
                    <div class="manual-margin">
                        <div class="flex flex-row">
                            <button onclick="downloadCmd('ref')" class="download-btn">Ref. Geno</button>
                            <button onclick="downloadCmd('t1')" class="download-btn">Target #1 Geno</button>
                            <button onclick="downloadCmd('t2')" class="download-btn">Target #2 Geno</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row">
                    <span>Download Seqlogo Image</span>
                    <div class="manual-margin">
                        <div class="flex flex-row">
                            <button onclick="downloadCmd('img')" class="download-btn">Download</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Control panel -->
            <!-- sixth Row -->
            <div class="flex">
                <div class="dropdown">
                    <button onclick="reset()" class="dropbtn">Reset</button>
                    <button onclick="run()" class="dropbtn">Run</button>
                </div>
            </div>
            <!-- sixth Row -->
        </div>
    </div>
    <div id="seqlogo-section">
        <img src="./reg.jpg">
    </div>
<script>
const selectorArr = [
    'Virus-selector',
    'ref-Species-selector',
    'ref-Genotype-selector',
    't1-Species-selector',
    't1-Genotype-selector',
    't2-Species-selector',
    't2-Genotype-selector',
    'Seg-selector'
];

let species = <?= json_encode($virus_species); ?>;
let species_map = <?= json_encode($species_map); ?>;

$("#ref-Species-selector").on("changed.bs.select", function(e, clickedIndex, newValue, oldValue) {
    createOptionList('#ref-Genotype-selector', clickedIndex);
});

$("#t1-Species-selector").on("changed.bs.select", function(e, clickedIndex, newValue, oldValue) {
    createOptionList('#t1-Genotype-selector', clickedIndex);
});

$("#t2-Species-selector").on("changed.bs.select", function(e, clickedIndex, newValue, oldValue) {
    createOptionList('#t2-Genotype-selector', clickedIndex);
});

function createOptionList(genoID, clickedIndex) {
    const spe = species[species_map[clickedIndex]];
    $(genoID).empty();
    $(genoID).selectpicker('refresh');
    spe.map(geno => {
        $(genoID).append('<option value="' + geno + '">' + geno + '</option>');
    });
    $(genoID).selectpicker('refresh');
}

function reset() {
    const EVA = species['EV-A'];
    // clear all dropdown
    selectorArr.map(selectID => {
        if (selectID == 'Virus-selector') {
            return;
        }
        if (/Genotype/.test(selectID)) {
            $("#" + selectID).empty();
            $("#" + selectID).selectpicker('refresh');
            EVA.map(geno => {
                $('#' + selectID).append('<option value="' + geno + '">' + geno + '</option>');
            });
        } else {
            $('#' + selectID).val('default');
        }
        $('#' + selectID).selectpicker("refresh");
        return true;
    });
}

function downloadCmd(type) {
    if ('img' == type) {
        let a = document.createElement('a');
        a.href = "./reg.jpg";
        a.download = "seqlogo.jpg";
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        return true;
    }
    const id = '#' + type + '-Genotype-selector';
    const genoType = $(id).find("option:selected").text();
    $.ajax({
       url: "./geno.php",
       type: "post",
       data: JSON.stringify({genoType: genoType}),
       success: function (response) {
           let blob = new Blob([response], { type: 'text/csv' });
           let link = window.document.createElement('a');
           link.href = window.URL.createObjectURL(blob);
           // Construct filename dynamically and set to link.download
           link.download = 'test.csv';
           document.body.appendChild(link);
           link.click();
           document.body.removeChild(link);
       },
       error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
          return false;
       }
   });
   return true;
}

function run() {
    // API call
    let mainVirus = $('#Virus-selector').val();
    let refGeno = $('#ref-Genotype-selector').val();
    let t1Geno = $('#t1-Genotype-selector').val();
    let t2Geno = $('#t2-Genotype-selector').val();
    let seg =  $('#Seg-selector').val();
    let data = {
        refGeno: refGeno,
        t1Geno: t1Geno,
        t2Geno: t2Geno,
        seg: seg
    };
   //  $.ajax({
   //     url: "./geno.php",
   //     type: "post",
   //     data: JSON.stringify(data),
   //     success: function (response) {
   //     },
   //     error: function(jqXHR, textStatus, errorThrown) {
   //        console.log(textStatus, errorThrown);
   //     }
   // });
}
</script>
</body>
</html>
