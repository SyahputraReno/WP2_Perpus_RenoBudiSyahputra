<html>
<head>
    <title>TOKO SEPATU</title>

    <style>
        form {
            width: 20%;
            margin: 20px auto;
            border-radius: 5px;
        }

        .input {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <center>
        <tr>
            <th colspan="5">
                <h3>TOKO SEPATU</h3>
                <hr>
            </th>
        </tr>
        <form action="<?= base_url('Tokosepatu/cetak'); ?>" method="post">
            <div class="input">
                <label for="nama">Nama Pembeli</label>
                <input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>">
            </div>
            <div class="input">
                <label for="telp">No HP</label>
                <input type="text" name="telp" id="telp" value="<?= set_value('telp'); ?>">
            </div>
            <div class="input">
                <label for="merk">Merk Sepatu</label>
                <select name="merk" id="merk">
                    <option value=""> --PILIH-- </option>
                    <option value="Nike">NIKE</option>
                    <option value="Adidas">ADIDAS</option>
                    <option value="Kickers">KICKERS</option>
                    <option value="Eiger">EIGER</option>
                    <option value="Bucherri">BUCHERRI</option>
                </select>
            </div>
            <div class="input">
                <label for="ukuran">Ukuran Sepatu</label>
                <select name="ukuran" id="ukuran">
                    <option value=""> --PILIH-- </option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                </select>
            </div>
            <div class="btn">
                <button type="submit">Submit</button>
            </div>
    </center>
</body>
</html>