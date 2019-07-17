
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Input Pengajuan Antrian</h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('user/subAntrian') ?>" class="form-horizontal" method="POST" id="antrian" name="antrian" enctype="multipart/form-data">
                                <i class="col-lg-1"></i>
                                <h4><b>INPUT ANTRIAN</b></h4>
                                <!-- <div class="form-group">
                                    <label class="control-label col-lg-3">Photo Kerusakan</label>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control" name="fileKerusakan" required>
                                        <i color="gray">Dapat berupa file gif|jpg|png|jpeg|pdf</i>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                <label class="control-label col-lg-3">Kendaraan Antrian</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="motor">
                                            <?php foreach($this->db->get_where('data_motor',array("idUser"=>$this->session->userdata("idUser")))->result() as $a): ?>
                                            <option value="<?php echo $a->id_motor ?>"><?php echo $a->nm_motor ?></option>
                                             <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Jenis Motor</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="jenis">
                                            <option value="Bebek">Motor Bebek</option>
                                            <option value="Matic">Motor Matic</option>
                                            <option value="Sport">Motor Sport</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Kilometer Motor</label>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control required" name="km_motor" id="km_motor">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Pilihan Jasa</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="jasa">
                                            <?php //foreach($this->db->get('category')->result() as $a): ?>
                                            <!-- <option value="<?php //echo $a->idCategory ?>"><?php //echo $a->namaCategory ?></option> -->
                                             <?php //endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Mekanik</label>
                                    <div class="col-lg-8">
                                        <select class="form-control required" name="mekanik">
                                            <?php foreach($this->db->get('mekanik')->result() as $a): ?>
                                            <option value="<?php echo $a->id_mekanik ?>"><?php echo $a->nama ?></option>
                                             <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Tanggal Antrian</label>
                                    <div class="col-lg-8">
                                        <input type="date" class="form-control required" name="est_date" id="est_date">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Sesi</label>
                                    <div class="col-lg-8">
                                        <select name="est_sesi" class="form-control required">
                                            <option value="Sesi Pagi">Sesi Pertama (Pagi)</option>
                                            <option value="Sesi Siang">Sesi Kedua (Siang)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Sparepart Sendiri ?</label>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <input type="radio" name="sparepart_flag" id="sparepart_flag1" value="Dari Bengkel"> Dari Bengkel
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="radio" name="sparepart_flag" id="sparepart_flag2" value="Sendiri"> Sendiri
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="radio" name="sparepart_flag" id="sparepart_flag3" value="Tidak Ganti" checked=""> Tidak Ganti
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-8">
                                            <textarea name="sparepart_list" id="sparepart_list" rows="5" class="form-control" placeholder="Sparepart yang di ganti"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Oli Sendiri ?</label>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <input type="radio" name="oli_flag" id="oli_flag1" value="Dari Bengkel"> Dari Bengkel
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="radio" name="oli_flag" id="oli_flag2" value="Sendiri"> Sendiri
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="radio" name="oli_flag" id="oli_flag3" value="Tidak Ganti" checked=""> Tidak Ganti
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-8">
                                            <select class="form-control required" name="oli">
                                                <option value="Pilihan">Pilihan</option>
                                                <?php foreach($this->db->get('oli')->result() as $a): ?>
                                                <option value="<?php echo $a->id_oli ?>"><?php echo $a->nama ?></option>
                                                 <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div><hr>
<!--                                 <div class="form-group">
                                <label class="control-label col-lg-3">No STNK</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="nostnk">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-lg-3">Warna</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control required" name="warna">
                                    </div>
                                </div> -->
                                <div class="col-lg-12 pull-right">
                                <input type="submit" name="submit" class="btn btn-primary pull-right col-lg-2" value="Submit">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <style>
        .error{
            color:red;
        }
    </style>

<script type="text/javascript">
/*
From JavaScript and Forms Tutorial at dyn-web.com
Find information and updates at http://www.dyn-web.com/tutorials/forms/
*/

// removes all option elements in select list 
// removeGrp (optional) boolean to remove optgroups
function removeAllOptions(sel, removeGrp) {
    var len, groups, par;
    if (removeGrp) {
        groups = sel.getElementsByTagName('optgroup');
        len = groups.length;
        for (var i=len; i; i--) {
            sel.removeChild( groups[i-1] );
        }
    }
    
    len = sel.options.length;
    for (var i=len; i; i--) {
        par = sel.options[i-1].parentNode;
        par.removeChild( sel.options[i-1] );
    }
}

function appendDataToSelect(sel, obj) {
    var f = document.createDocumentFragment();
    var labels = [], group, opts;
    
    function addOptions(obj) {
        var f = document.createDocumentFragment();
        var o;
        
        for (var i=0, len=obj.text.length; i<len; i++) {
            o = document.createElement('option');
            o.appendChild( document.createTextNode( obj.text[i] ) );
            
            if ( obj.value ) {
                o.value = obj.value[i];
            }
            
            f.appendChild(o);
        }
        return f;
    }
    
    if ( obj.text ) {
        opts = addOptions(obj);
        f.appendChild(opts);
    } else {
        for ( var prop in obj ) {
            if ( obj.hasOwnProperty(prop) ) {
                labels.push(prop);
            }
        }
        
        for (var i=0, len=labels.length; i<len; i++) {
            group = document.createElement('optgroup');
            group.label = labels[i];
            f.appendChild(group);
            opts = addOptions(obj[ labels[i] ] );
            group.appendChild(opts);
        }
    }
    sel.appendChild(f);
}

// anonymous function assigned to onchange event of controlling select list
document.forms['antrian'].elements['jenis'].onchange = function(e) {
    // name of associated select list
    var relName = 'jasa';
    
    // reference to associated select list 
    var relList = this.form.elements[ relName ];
    
    // get data from object literal based on selection in controlling select list (this.value)
    var obj = Select_List_Data[ relName ][ this.value ];
    
    // remove current option elements
    removeAllOptions(relList, true);
    
    // call function to add optgroup/option elements
    // pass reference to associated select list and data for new options
    appendDataToSelect(relList, obj);
};

// object literal holds data for optgroup/option elements
var Select_List_Data = {
    
    // name of associated select list
    'jasa': {
        
        // names match option values in controlling select list
        Bebek: {
            // optgroup label
            //'Free Scripts': {
                text: [<?php echo $this->db->query("select (select group_concat(concat('''',namaCategory,'''') separator ', ') from Category where jenis_motor = 'Motor Bebek') as bebek")->row()->bebek; ?>],
                value: [<?php echo $this->db->query("select (select group_concat(concat('''',idCategory,'''') separator ', ') from Category where jenis_motor = 'Motor Bebek') as bebek")->row()->bebek; ?>]
            // },
            // 'License': {
            //     text: ['Scrolling Divs', 'Tooltips', 'Rotate Images'],
            //     value: ['scroll', 'tooltips', 'rotate']
            // }
        },
        Matic: {
            // example without optgroups
            text: [<?php echo $this->db->query("select (select group_concat(concat('''',namaCategory,'''') separator ', ') from Category where jenis_motor = 'Motor Matic') as Matic")->row()->Matic; ?>],
                value: [<?php echo $this->db->query("select (select group_concat(concat('''',idCategory,'''') separator ', ') from Category where jenis_motor = 'Motor Matic') as Matic")->row()->Matic; ?>]
        },
        Sport: {
            text: [<?php echo $this->db->query("select (select group_concat(concat('''',namaCategory,'''') separator ', ') from Category where jenis_motor = 'Motor Sport') as Sport")->row()->Sport; ?>],
                value: [<?php echo $this->db->query("select (select group_concat(concat('''',idCategory,'''') separator ', ') from Category where jenis_motor = 'Motor Sport') as Sport")->row()->Sport; ?>]
        }
    }
    
};

// populate associated select list when page loads
window.onload = function() {
    var form = document.forms['antrian'];
    
    // reference to controlling select list
    var sel = form.elements['jenis'];
    sel.selectedIndex = 0;
    
    // name of associated select list
    var relName = 'jasa';
    // reference to associated select list
    var rel = form.elements[ relName ];
    
    // get data for associated select list passing its name
    // and value of selected in controlling select list
    var data = Select_List_Data[ relName ][ sel.value ];
    
    // add options to associated select list
    appendDataToSelect(rel, data);
};

</script>

</html>