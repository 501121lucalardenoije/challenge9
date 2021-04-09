<form action="cars.php" enctype="multipart/form-data" method="post">

    <input type="text" name="type" placeholder="Type"/>

    <input type="text" name="brand" placeholder="Merk"/>

    <input type="text" name="model" placeholder="Model"/>

    <input type="text" name="registration" placeholder="eerste registratie"/>
    
    <input type="text" name="bouwjaar" placeholder="Bouwjaar"/>

    <input type="text" name="kilometerstand" placeholder="Kilometerstand"/>

    <input type="text" name="power" placeholder="vermogen"/>

    <input type="text" name="horsepower" placeholder="pk"/>

    <input type="text" name="brandstof" placeholder="Brandstof"/>

    <input type="text" name="transmission" placeholder="Transmissie"/>

    <input type="text" name="price" placeholder="Prijs"/>

    <input type="text" name="discountprice" placeholder="Kortings prijs"/>

    <input type="text" name="seats" placeholder="aantal stoelen"/>

    <input type="text" name="doors" placeholder="deuren"/>

    <input type="text" name="color" placeholder="kleur"/>

    <input type='file' name='files[]' multiple />
   
    <input type="hidden" name="frmGegevens" value="frmGegevens"/>
    
    <input type="hidden" name="frm_adminform" value="frm_adminform"/>

    <input type="submit" name="btn_submit" value="Verzenden" />


</form>