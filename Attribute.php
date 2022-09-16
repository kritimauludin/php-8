<?php
/*
 * Attributes
    ● Attributes adalah menambahkan metadata terhadap kode program yang kita buat.
    ● Fitur ini adalah fitur yang sangat baru sekali di PHP, dan bisa memungkinkan fitur ini bakal diadopsi
    sangat banyak oleh framework-framework di PHP di masa yang akan datang
    ● Fitur ini jika di bahasa pemrograman seperti Java bernama Annotation, Attributes di C# atau
    Decorator di Python dan JavaScript
    ● https://www.php.net/manual/en/language.attributes.php
    ● https://wiki.php.net/rfc/attributes_v2
 */

/*
 * Attribute Target
    ● Secara default, attribute bisa digunakan di semua target (class, function, method, property, dan
    lain-lain)
    ● Jika kita ingin membatasi hanya bisa digunakan di target tertentu, kita bisa tambahkan
    informasinya ketika membaut class attribute
 */
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class NotBlank{

}

/*
 * Attribute Class
    ● Attribute class adalah class biasa, kita bisa menambahkan property, function / method dan
    constructor jika kita mau
    ● Ini cocok ketika kita butuh menambahkan informasi tambahan di attribute class
 */
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class Length {
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

/*
 * Menggunakan Attribute
    ● Attribute bisa kita gunakan di berbagai tempat, seperti di Class, Function, Method, Property, Class
    Constant dan Parameter
    ● Untuk menggunakan Attribute, kita cukup gunakan tanda #[NamaAttribute] di target yang kita
    tentukan
 */
class LoginRequest {
    #[Length(min: 4, max: 10)]
    #[NotBlank]
    public ?string $username;

    #[NotBlank]
    #[Length(min: 8, max: 10)]
    public ?string $password;
}

function validate(object $object): void{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach($properties as $property){
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void{
    //getAttributes merupakan function baru diPHP 8 untuk dapatkan attribut
    $attributes = $property->getAttributes(NotBlank::class);
    if(count($attributes) > 0){
        if (!$property->isInitialized($object))
            throw new Exception("Property {$property->name} is null");
        if ($property->getValue($object) == null)
            throw new Exception("Property {$property->name} is null");
    }
}

function validateLength(ReflectionProperty $property, object $object): void {
    if (!$property->isInitialized($object) || $property->getValue($object) == null)
        return;//cancle validation

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach($attributes as $attribute){
        //jika kita ingin mmbuat objek dr siatribute yaitu length kita bisa gunakan function newInstance
        $length = $attribute->newInstance();
        $valueLength = strlen($value);
        if($valueLength < $length->min)
            throw new Exception("Property $property->name to short");
        if($valueLength > $length->max)
            throw new Exception("Property $property->name to long");
    }
}

//implemetation
$request = new LoginRequest();
$request->username = "kriti";
$request->password = "rahasiaja";

validate($request);