<? 
namespace App\Models;
// use autoload from composer
require($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

class IngredientModel extends BaseModel {
  const TABLE = 'ingredients';
  private $id;
  private $name;
  private $category; 
  private $nutritionComponents; 

  public function __construct($id = null, $name = null, $category = null, $nutritionComponents = null) {
    parent::__construct();
    $this->id = $id ?? 0;
    $this->name = $name ?? '';
    $this->category = $category ?? '';
    $this->nutritionComponents = $nutritionComponents ?? [
        'calcium' => null,
        'calories' => null,
        'carbohydrate' => null,
        'cholesterol' => null,
        'fiber' => null,
        'iron' => null,
        'fat' => null,
        'monounsaturated_fat' => null,
        'polyunsaturated_fat' => null,
        'saturated_fat' => null,
        'potassium' => null,
        'protein' => null,
        'sodium' => null,
        'sugar' => null,
        'vitamin_a' => null,
        'vitamin_c' => null
    ];
  }
  public function getId() { return $this->id; }
  public function getName() { return $this->name; }
  public function getCategory() { return $this->category; }
  public function getNutritionComponents() { return $this->nutritionComponents; }
  public function setId($id) { $this->id = $id; }
  public function setName($name) { $this->name = $name; }
  public function setCategory($category) { $this->category = $category; }
  public function setNutritionComponents($nutritionComponents) { 
    $this->nutritionComponents = $nutritionComponents; 
  }

  public function getAll() {
    try {
      // Make sure the connection is established
      if ($this->getConnect() === null) {
        throw new \PDOException("Error: Unable to establish database connection. <br>");
      }
      $table = self::TABLE;
      $sql = "select * from {$table}";
      $stmt = $this->getConnect()->prepare($sql);
      if($stmt->execute()){
        $ingridients = [];
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
          $ingrident = new IngredientModel();
          $ingrident->setID($row['id']);
          $ingrident->setName($row['name']);
          $ingrident->setCategory($row['category']);
          $nutritionComponents = [
            'calcium' => $row['calcium'],
            'calories' => $row['calories'],
            'carbohydrate' => $row['carbohydrate'],
            'cholesterol' => $row['cholesterol'],
            'fiber' => $row['fiber'],
            'iron' => $row['iron'],
            'fat' => $row['fat'],
            'monounsaturated_fat' => $row['monounsaturated_fat'],
            'polyunsaturated_fat' => $row['polyunsaturated_fat'],
            'saturated_fat' => $row['saturated_fat'],
            'potassium' => $row['potassium'],
            'protein' => $row['protein'],
            'sodium' => $row['sodium'],
            'sugar' => $row['sugar'],
            'vitamin_a' => $row['vitamin_a'],
            'vitamin_c' => $row['vitamin_c'],
          ];
          $ingrident->setNutritionComponents($nutritionComponents);
          $ingridients[] = $ingrident;
        }
        return $ingridients;
      }
      else {throw new \Exception("Error in executing prepare statement. ");}
    } catch (\PDOException $e) {
      echo $e->getMessage();
      return null;
    }
  }
}