<?php include "./models/Ikea.php";

class IkeaController{

    public static function index()
    {
        $ikeas = Ikea::all();
        return $ikeas;
    } 



    public static function store()
    {
        Ikea::create();
        
    }


    public static function show()
    {
        $ikea = Ikea::find($_POST["id"]);
        return $ikea;
    }


    public static function update()
    {
       $ikea = new Ikea();
       $ikea->id = $_POST["id"];
       $ikea->name = $_POST["name"];
       $ikea->category = $_POST["category"];
       $ikea->price = $_POST["price"];
       $ikea->about = $_POST["about"];
       $ikea->update();
    }

    public static function destroy()
    {
       Ikea::destroy($_POST['id']);
    }

    
    public static function getfilterParams()
    {
        return Ikea::getfilterParams();
        
    }
    
    public static function filter()
    {
        return Ikea::filter();
        
    }
    public static function search()
    {
        return Ikea::search();
        
    }
    
}

?>