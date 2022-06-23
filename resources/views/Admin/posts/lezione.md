## appunti

Relazioni

- 1) creare delle categorie e pensiamo cosa vogliamo mettere in relazione. Un post appartiene ad una categoria e una categorie appartiene a più post
- facciamo il modello, lo mettiamo dentro models e lo chiamiamo category e sicuramente serve il modello e e il seeder e la migrazione

- andiamo nella migrazione e cambiamo il naspece aggiungendo \admin dopo importiamo il controller

- facciamo la table sicuramente la categoria avrà un nome, e se si vuole fare anche una immagine

- andiamo nel seeder, andiamo nel metodo run e facciamo alcune categorie alli'interno di un array

- facciamo un foreach per salvare i dati all'interno del database esempio:

foreach($categories ad $category){
    $new_cat = new Category();
    $new_cat->name = $category;
    ecc.....
}

- facciamo la migrazione
- facciamo il seeder per popolare la tabella delle categorie
 
 - abbiamo detto che un post può essere coolegato ad una categorie ma una categoria puà avere più post
 andiamo sul modello post e possiamo fare
 
- belongto ex::
dobiamo importare sopra belongsto

public function category(): belongsto
{
    return $this->belongsTo(category::class);
}
-- la prima relazione è stata fatta, però dobbiamo fare anche l'operazione inversa

se faccio $post->category ( prende tutta la categoria)
oppure
$post->category->nome e restituisce solamente il titolo

--- operazione inversa
andare su category modello
una categoria ha molti post
public function post(): hasmany
{
    return $this->hasMany(Post::class);
    dobbiamo anche importare sopra hasMany
}

Per mettere in relazioni le tabelle all'interno del dobbiamophp artisan make: migration add_category_id_to_post_table

se andiamo nelle migrazioni abbaimo la tabella con up e down

andiamo su up e settiamo una nuova colonna $table->unsignedBigInteger('cagory_id')->nullable()after('id')

- settare il vincolo perchè dobbiamo mettere in relazione 

$table->forign('category_id')->references('id')->on('categorie')->onDelete('set null');


- andiamo su down e togliamo il vincolo
$table->dropForeign('posts_category_id_foreign');
$table->dropColumn('category_id');
 - facciamo la migrazione

 - controlliamo il db e verifichiamo la lista di post e vediamo se c'è il category_id

 - aggiungiamo un post tramite la categoria con php artisan ti:

 - prendere la $category->posts e dovrebbe dare un array vuoto, per assegnare un valore facciamo:
 $category->posts()->save($post);
 verificihiamo

 facciamo le operazioni crud

 andiamo sul post.php model e aggiungiamo una voce alla fillable e aggiungiamo category_id

 - andiamo nel postcontroller e andiamo nel create e andiamo a prendere tutte le categorie
 $cartegorie = Category::all() e lo passiamo con compact, ovviamente dobbiamo importare il modello.
 se facciamo un dd di categories andiamo a visitare la lista delle 6 categorie

 entriamo nel create(il file blade)  e aggiungiamo il select, come voce deve avere Categories 
 quindi lasciamo una voce del select . facciamo un cicl foreach($category as category) e stampiamo option con ${{$category->name}}
 nell'option value mettiamo id con {{$category->id}}

 ** SE NON FUNZIONA VEDERE REPO SU STORE CRUD****

 usando l'ispector possiamo cambiare il valore di value con qualsiasi numero, per evitare questo

 dentro store dobbiamo verificare se id inserito esiste tra gli id delle categorie della tabella categories e c'è una regola di validazione che si chiama exist:
 exist:categories, id; la dobbiamo aggiungere nella post request con:::
 'category_id' => ['nullable','exist:categories,id']