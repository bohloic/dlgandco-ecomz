
<?php
    class DB extends PDO
    {
        private $driver='mysql';
        private $host='localhost';
        private $username='root';
        private $password='';
        private $database='appiska';
        private $db;
    
        public function __construct( ?string $driver = null, ?string $host= null ,?string $username= null, ?string $password= null, ?string $database= null)
        {   
            if($host != null) {
                $this->driver=$driver;
                $this->host=$host;
                $this->username=$username;
                $this->password=$password;
                $this->database=$database;
            }
            try{
                $db = new PDO($this->driver.':dbname='.$this->database.';port=3306;host='.$this->host,$this->username,
                $this->password);
                $this->db= $db;
            }catch(PDOException $e){
                die('<h1>Impossible de se conncecter à la base de donnée</h1>'.$e->getMessage()); 
            }
        }
        
        // public function test(string $phrase = '') 
        // {
            // $req = [];
            // $req = $this-$db->prepare($phrase);
            // $req->execute();
            // $resul = $req->fetchAll();
            // if($phrase !== ''){
            //     return true;
            // }
            
        // }
    }
    
    try{
        
        $data = new DB('mysql','appiska','localhost','root','');
        $cat3 = $data->prepare('SELECT * FROM `wp_woocommerce_order_items`');
        $cat3->execute();
        $result = $cat3->fetchAll();
        var_dump($resul); 
    }catch(PDOException $e){
        die('<h1>Impossible de se conncecter à la base de donnée</h1>'.$e->getMessage()); 
    }
    

    
?>




<!-- <article class="col-md-6">

    <!-- <div <?php post_class(); ?>>                     -->
        <div class="news-item <?php echo esc_attr(has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail' ) ?>">
            <?php envo_shop_thumb_img('envo-shop-med'); ?>
            <div class="news-text-wrap">
                <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                <?php envo_shop_author_meta(); ?>
                <div class="content-date-comments">
                    <?php envo_shop_widget_date(); ?>
                    <?php envo_shop_widget_comments(); ?>
                </div>  
                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div><!-- .post-excerpt -->
            </div><!-- .news-text-wrap -->
        </div><!-- .news-item -->
    </div>
</article> -->
