<?php

//production
$query = $this->db->query('SELECT queue.id, queue.counter_id, ticket, counter_number from queue inner join counter on queue.counter_id = counter.id where queue.is_called = 0 AND queue.is_done = 0 AND counter.counter_status = 1')->row_array();
$loket = $query['counter_number'];
$nomor = $query['ticket'];
$panjangLoket = strlen($loket);
$panjang = strlen($nomor);
$antrian = $nomor;



//test
// $query = 1;
// $loket = 11;
// $nomor = 162;
// $panjangLoket = strlen($loket);
// $panjang = strlen($nomor);
// $antrian = $nomor;
?>

<script type="text/javascript">

</script>

<audio id="suarabel" src="<?php echo base_url() ?>asset/rekaman/Airport_Bell.mp3"></audio>
<audio id="suarabelnomorurut" src="<?php echo base_url() ?>asset/rekaman/nomor-urut.mp3"></audio>
<audio id="suarabelsuarabelloket" src="<?php echo base_url() ?>asset/rekaman/meja.mp3"></audio>

<audio id="belas" src="<?php echo base_url() ?>asset/rekaman/belas.mp3"></audio>
<audio id="sebelas" src="<?php echo base_url() ?>asset/rekaman/sebelas.mp3"></audio>
<audio id="puluh" src="<?php echo base_url() ?>asset/rekaman/puluh.mp3"></audio>
<audio id="sepuluh" src="<?php echo base_url() ?>asset/rekaman/sepuluh.mp3"></audio>
<audio id="ratus" src="<?php echo base_url() ?>asset/rekaman/ratus.mp3"></audio>
<audio id="seratus" src="<?php echo base_url() ?>asset/rekaman/seratus.mp3"></audio>
<?php
    if($loket < 10) {
?>
    <audio id="suarabelloket2" src="<?php echo base_url() ?>asset/rekaman/<?php echo "$loket"; ?>.mp3"></audio>
<?php
    }
    elseif($loket == 11) {
?>
    <audio id="suarabelloket2" src="<?php echo base_url() ?>asset/rekaman/sebelas.mp3"></audio>

<?php
    } elseif($loket == 10) {
?>
    <audio id="suarabelloket2" src="<?php echo base_url() ?>asset/rekaman/sepuluh.mp3"></audio>
<?php
    } elseif($panjangLoket < 20) {
?>
    <audio id="suarabelloket2" src="<?php echo base_url() ?>asset/rekaman/<?php echo substr($loket, 1,1) ?>.mp3"></audio>
<?php
    }
?>
<!-- <audio id="suarabelloket2" src="<?php echo base_url() ?>asset/rekaman/<?php echo "$loket"; ?>.mp3"></audio> -->
<?php for ($i = 0; $i < $panjang; $i++) {
    ?>
    <audio id="suarabel<?php echo $i; ?>" src="<?php echo base_url() ?>asset/rekaman/<?php echo substr($antrian, $i, 1); ?>.mp3"></audio>
<?php
}
?>


<script type="text/javascript">
    <?php
    if ($query != null) {
        ?>
        $(document).ready(function() {
            mulai();
        });
        <?php
        // $this->db->query("update queue set is_done = 1 where counter_id = '".$query['counter_id']."' and is_called = 1 and is_done = 0 order by ticket desc");
        $this->db->query("update queue set is_called = 1 where id= '" . $query['id'] . "'");
        $this->db->query("update counter set counter_status = 1 where id = '".$query['counter_id']."'");
    }
    ?>

    function mulai() {
        //MAINKAN SUARA BEL PADA SAAT AWAL
        // document.getElementById('suarabel').pause();
        // document.getElementById('suarabel').currentTime=0;
        // document.getElementById('suarabel').play();

        // //SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT
        // totalwaktu=document.getElementById('suarabel').duration*1000;
        totalwaktu = 0;
        setTimeout(function() {
            document.getElementById('suarabel').pause();
            document.getElementById('suarabel').currentTime=0;
            document.getElementById('suarabel').play();
        }, totalwaktu);
        totalwaktu = totalwaktu + 8000;

        //MAINKAN SUARA NOMOR URUT
        setTimeout(function() {
            document.getElementById('suarabelnomorurut').pause();
            document.getElementById('suarabelnomorurut').currentTime = 0;
            document.getElementById('suarabelnomorurut').play();
        }, totalwaktu);
        totalwaktu = totalwaktu + 2000;

        <?php
        //JIKA KURANG DARI 10 MAKA MAIKAN SUARA ANGKA1
        if ($antrian < 10) {
            ?>

            setTimeout(function() {
                document.getElementById('suarabel0').pause();
                document.getElementById('suarabel0').currentTime = 0;
                document.getElementById('suarabel0').play();
            }, totalwaktu);

            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian == 10) {
        //JIKA 10 MAKA MAIKAN SUARA SEPULUH
        ?>
            setTimeout(function() {
                document.getElementById('sepuluh').pause();
                document.getElementById('sepuluh').currentTime = 0;
                document.getElementById('sepuluh').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian == 11) {
        //JIKA 11 MAKA MAIKAN SUARA SEBELAS
        ?>
            setTimeout(function() {
                document.getElementById('sebelas').pause();
                document.getElementById('sebelas').currentTime = 0;
                document.getElementById('sebelas').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian < 20) {
        //JIKA 12-20 MAKA MAIKAN SUARA ANGKA2+"BELAS"
        ?>
            setTimeout(function() {
                document.getElementById('suarabel1').pause();
                document.getElementById('suarabel1').currentTime = 0;
                document.getElementById('suarabel1').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('belas').pause();
                document.getElementById('belas').currentTime = 0;
                document.getElementById('belas').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian < 100) {
        //JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
        ?>
            setTimeout(function() {
                document.getElementById('suarabel0').pause();
                document.getElementById('suarabel0').currentTime = 0;
                document.getElementById('suarabel0').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('puluh').pause();
                document.getElementById('puluh').currentTime = 0;
                document.getElementById('puluh').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('suarabel1').pause();
                document.getElementById('suarabel1').currentTime = 0;
                document.getElementById('suarabel1').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian == 100) {
        //JIKA 100 MAKA MAIKAN SUARA SEratus
        ?>
            setTimeout(function() {
                document.getElementById('seratus').pause();
                document.getElementById('seratus').currentTime = 0;
                document.getElementById('seratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian < 110) {
        //JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
        ?>

            setTimeout(function() {
                document.getElementById('seratus').pause();
                document.getElementById('seratus').currentTime = 0;
                document.getElementById('seratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('suarabel2').pause();
                document.getElementById('suarabel2').currentTime = 0;
                document.getElementById('suarabel2').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian == 110) {
        //JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
        ?>
            setTimeout(function() {
                document.getElementById('seratus').pause();
                document.getElementById('seratus').currentTime = 0;
                document.getElementById('seratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('sepuluh').pause();
                document.getElementById('sepuluh').currentTime = 0;
                document.getElementById('sepuluh').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
        //JIKA KURANG DARI 10 MAKA MAIKAN SUARA ANGKA1
    } elseif ($antrian == 111) {
        ?>

            setTimeout(function() {
                document.getElementById('seratus').pause();
                document.getElementById('seratus').currentTime = 0;
                document.getElementById('seratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('sebelas').pause();
                document.getElementById('sebelas').currentTime = 0;
                document.getElementById('sebelas').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian < 120) {
        //JIKA 12-20 MAKA MAIKAN SUARA ANGKA2+"BELAS"
        ?>
            setTimeout(function() {
                document.getElementById('seratus').pause();
                document.getElementById('seratus').currentTime = 0;
                document.getElementById('seratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('suarabel2').pause();
                document.getElementById('suarabel2').currentTime = 0;
                document.getElementById('suarabel2').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('belas').pause();
                document.getElementById('belas').currentTime = 0;
                document.getElementById('belas').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian < 200) {
        //JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
        ?>
            setTimeout(function() {
                document.getElementById('seratus').pause();
                document.getElementById('seratus').currentTime = 0;
                document.getElementById('seratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('suarabel1').pause();
                document.getElementById('suarabel1').currentTime = 0;
                document.getElementById('suarabel1').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('puluh').pause();
                document.getElementById('puluh').currentTime = 0;
                document.getElementById('puluh').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('suarabel2').pause();
                document.getElementById('suarabel2').currentTime = 0;
                document.getElementById('suarabel2').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian == 200) {
        //JIKA 100 MAKA MAIKAN SUARA SEratus
        ?>
            setTimeout(function() {
                document.getElementById('suarabel0').pause();
                document.getElementById('suarabel0').currentTime = 0;
                document.getElementById('suarabel0').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian < 210) {
        //JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
        ?>
            setTimeout(function() {
                document.getElementById('suarabel0').pause();
                document.getElementById('suarabel0').currentTime = 0;
                document.getElementById('suarabel0').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('suarabel2').pause();
                document.getElementById('suarabel2').currentTime = 0;
                document.getElementById('suarabel2').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian == 210) {
        //JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
        ?>
            setTimeout(function() {
                document.getElementById('suarabel0').pause();
                document.getElementById('suarabel0').currentTime = 0;
                document.getElementById('suarabel0').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('sepuluh').pause();
                document.getElementById('sepuluh').currentTime = 0;
                document.getElementById('sepuluh').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
        //JIKA KURANG DARI 10 MAKA MAIKAN SUARA ANGKA1
    } elseif ($antrian == 211) {
        ?>
            setTimeout(function() {
                document.getElementById('suarabel0').pause();
                document.getElementById('suarabel0').currentTime = 0;
                document.getElementById('suarabel0').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('sebelas').pause();
                document.getElementById('sebelas').currentTime = 0;
                document.getElementById('sebelas').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian < 220) {
        //JIKA 12-20 MAKA MAIKAN SUARA ANGKA2+"BELAS"
        ?>
            setTimeout(function() {
                document.getElementById('suarabel0').pause();
                document.getElementById('suarabel0').currentTime = 0;
                document.getElementById('suarabel0').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('suarabel2').pause();
                document.getElementById('suarabel2').currentTime = 0;
                document.getElementById('suarabel2').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('belas').pause();
                document.getElementById('belas').currentTime = 0;
                document.getElementById('belas').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
        <?php
    } elseif ($antrian < 1000) {
        //JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
        ?>
            setTimeout(function() {
                document.getElementById('suarabel0').pause();
                document.getElementById('suarabel0').currentTime = 0;
                document.getElementById('suarabel0').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('ratus').pause();
                document.getElementById('ratus').currentTime = 0;
                document.getElementById('ratus').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('suarabel1').pause();
                document.getElementById('suarabel1').currentTime = 0;
                document.getElementById('suarabel1').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('puluh').pause();
                document.getElementById('puluh').currentTime = 0;
                document.getElementById('puluh').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;
            setTimeout(function() {
                document.getElementById('suarabel2').pause();
                document.getElementById('suarabel2').currentTime = 0;
                document.getElementById('suarabel2').play();
            }, totalwaktu);
            totalwaktu = totalwaktu + 1000;

        <?php
    } else {
        //JIKA LEBIH DARI 100
        //Karena aplikasi ini masih sederhana maka logina konversi hanya sampai 100
        //Selebihnya akan langsung disebutkan angkanya saja
        //tanpa kata "RATUS", "PULUH", maupun "BELAS"
        ?>

            <?php
            for ($i = 0; $i < $panjang; $i++) {
                ?>

                totalwaktu = totalwaktu + 1000;
                setTimeout(function() {
                    document.getElementById('suarabel<?php echo $i; ?>').pause();
                    document.getElementById('suarabel<?php echo $i; ?>').currentTime = 0;
                    document.getElementById('suarabel<?php echo $i; ?>').play();
                }, totalwaktu);
            <?php
        }
    }
    ?>


        totalwaktu = totalwaktu + 1000;
        setTimeout(function() {
            document.getElementById('suarabelsuarabelloket').pause();
            document.getElementById('suarabelsuarabelloket').currentTime = 0;
            document.getElementById('suarabelsuarabelloket').play();
        }, totalwaktu);

        totalwaktu = totalwaktu + 1000;
        setTimeout(function() {
            document.getElementById('suarabelloket2').pause();
            document.getElementById('suarabelloket2').currentTime = 0;
            document.getElementById('suarabelloket2').play();
        }, totalwaktu);

        <?php
            if($loket == 12) {
        ?>
            totalwaktu = totalwaktu + 700;   
            setTimeout(function() {
                document.getElementById('belas').pause();
                document.getElementById('belas').currentTime = 0;
                document.getElementById('belas').play();
            }, totalwaktu);
        <?php
            }
        ?>
    }
</script>   