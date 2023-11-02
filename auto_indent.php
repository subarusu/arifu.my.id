<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil teks dari "textbox 1" dan membersihkan masukan
    $input_text = isset($_POST['input_text']) ? htmlspecialchars($_POST['input_text']) : '';

    // Lakukan auto-indentation
    $indented_text = autoIndent($input_text);

    // Tampilkan hasil di "textbox 2"
    echo '<textarea class="textbox" name="output_text" rows="14" cols="60" readonly>' . htmlspecialchars($indented_text) . '</textarea>';
}

function autoIndent($text) {
    // Gantilah tanda baris baru dengan spasi/tab sesuai kebutuhan Anda.
    // Contoh sederhana:
    $indented_text = str_replace("\n", "  ", $text);
    
    return $indented_text;
}
?>
