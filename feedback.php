<?php include './inc/header.php'; ?>

<?php  
$feedback = [
  [
    'id' => '1',
    'name' => 'Beth Williams',
    'email' => 'beth@gmail.com',
    'body' => 'Pushkar Media is ok'
  ],
  [
    'id' => '2',
    'name' => 'Ram Sharma',
    'email' => 'ram@gmail.com',
    'body' => 'Pushkar Media is excellent'
  ],
  [
    'id' => '3',
    'name' => 'Brad Pitt',
    'email' => 'brad@gmail.com',
    'body' => 'Pushkar Media is bad'
  ]
]
?>

        <h2>Past Feedback</h2>

        <?php if(empty($feedback)): ?>
         <p class="lead mt-3">There is no feedback</p>
         <?php endif; ?>

        <?php foreach($feedback as $item): ?>
        <div class="card my-3 w-75" >
          <div class="card-body text-center">
            <?php echo $item['body']; ?>
            <div class="text-secondary mt-2">
              By <?php echo $item['name']; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      
<?php include './inc/footer.php'; ?>