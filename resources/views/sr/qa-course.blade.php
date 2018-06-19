@extends('layouts.app')

@section('title')
QA Kurs
@endsection

@section('content')

<div class="course">
  <div class="row">
      <h1>QA KURS<span></h1>
      <p>
        Prepoznali smo da na tržištu postoji velika potreba za stručnjacima iz oblasti
        <br>testiranja i održavanja kvaliteta, funkcionalnosti i izgleda svakog veb-sajta.
      </p>
  </div>
</div>
<!-- end header-background -->

<div class="course-text">
  <div class="row">

    <div class="container">

      <div class="col s12 m12 l6 xl6 center-align course-text-left">

        <p>Agencija JAKHO organizuje QA Kurs, po metodologiji i u saradnji sa Rhea Software d.o.o. iz Beograda.
            Naš kurs je namenjen svima koji žele da stečeno teorijsko i praktično znanje primene i brzo dođu do zaposlenja u ovoj oblasti koja se neprestano razvija. Posle završenog kursa bićete obučeni za testiranje veb-sajtova i uspešno prezentovanje stečenih znanja i kompetencija.
        </p>

      </br>
        <h6>Ovaj kurs je namenjen Vama ukoliko posedujete:</h6>

        <p><i class="material-icons">brightness_1</i> Osnovno iskustvo rada na računaru</p>
        <p><i class="material-icons">brightness_1</i> Želju da stičete (nova) znanja u IT oblasti</p>
        <p><i class="material-icons">brightness_1</i> Motivaciju da stečena znanja brzo primenite.</p>
        <h5>Mi <strong>znamo kako </strong> da Vam to i omogućimo!</h5>
      </div>
      <div class="col s12 m12 l6 xl6 left-align course-text-right">
        <img src="{{asset('images/circle.png')}}" alt="circle" />
      </div>
    </div>

  </div>
</div>


<div class="qatesting">
    <div class="container col s12 m12 l12">
        <div class="row">
            <div class="col s12 m6 l6 importance">
              <h2>ZNAČAJ QA</h2>
              <ul>
              <li><p><i class="material-icons">brightness_1</i> Testiranje i održavanje kvaliteta funkcionalnosti i izgleda svakog softvera je podjednako važan proces koliko i izgradnja samog softvera.</p></li>
              <li><p><i class="material-icons">brightness_1</i> Čitav ciklus razvoja softvera podrazumeva da se na kraju istog isporuči kvalitetan proizvod krajnjim korisnicima.</p></li>
              <li><p><i class="material-icons">brightness_1</i> Garancija tog kvaliteta je dobro urađen posao od strane QA testera.</p></li>
              </ul>
            </div>
        <div class="col s12 m6 l6 references">
              <h2>REFERENCE</h2>
              <ul>
              <li><p><i class="material-icons">brightness_1</i> Znanje i iskustvo koje posedujemo, upotpunjeno je kroz <span>5000 pregledanih CV-eva</span></p></li>
              <li><p><i class="material-icons">brightness_1</i> Više od 600 održanih intervjua sa kandidatima.</p></li>
              <li><p><i class="material-icons">brightness_1</i> Preko 200 uspešno obučenih mladih ljudi koji danas rade u IT sektoru.</p></li>
              </ul>
            </div>
        </div>
    </div>
</div>
<!-- mision-vision -->
<div class="qacours-backqraund">
  <div class="knowledge">
    <div class="container col s12 m12 l12 know-padding">
      <div class="knowledgeuse">
        <h2>PRIMENA STEČENOG ZNANJA</h2>
        <div class="row">
            <div class="col s12 m12 l4 knowledge-text">
              <ul>
              <li><p>U okviru QA kursa koji organizujemo <span>svi polaznici će biti upoznati sa</span> alatima, procedurama, smernicama i <span>korisnim savetima koji su neophodni </span>za kvalitetno testiranje samog softvera.</p></li>
              </ul>
            </div>
            <div class="col s12 m12 l4 knowledge-text">
              <ul>
              <li><p>Kroz teorijska i praktična predavanja <span>polaznici će imati priliku da savladaju</span> osnove softverskog inženjerstva bez<span> prethodnog iskustva iz ove oblasti.</span></p></li>
              </ul>
            </div>
             <div class="col s12 m12 l4 knowledge-text">
              <ul>
              <li><p>To je ujedno i naš cilj, jer će polaznici <span>kursa biti upoznati sa svim aspektima</span> koji su važni za dobijanje krajnjeg<span> kvalitetnog softverskog proizvoda.</span></p></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
  </div>

<!--Course content-->
<div class="content">
   <div class="container">
    <div class="row">
        <h2>SADRŽAJ KURSA</h2>

        <div class="col s12 m6 l4">
         <ol>
            <li><p>UVOD</p>
              <ul>
                 <li><i class="material-icons">brightness_1</i> Uvod u manuelno testiranje</li>
                 <li><i class="material-icons">brightness_1</i> Životni ciklus jednog sajta</li>
                 <li><i class="material-icons">brightness_1</i> Uloga QAT-a</li>
                 <li><i class="material-icons">brightness_1</i> Ticketing/DB sistemi/TC</li>
                 <li><i class="material-icons">brightness_1</i> Tipovi i statusi tiketa u Jira <span>ticketing software-u</span></li>
                 <li><i class="material-icons">brightness_1</i> Gadget fans</li>
                 <li><i class="material-icons">brightness_1</i> Vrste testova</li>
              </ul>
            </li>
            <li><p>ANALITIKA</p>
              <ul>
                 <li><i class="material-icons">brightness_1</i> Uvod u analitiku</li>
                 <li><i class="material-icons">brightness_1</i> Ekstenzije (Tag Assistant Firebug)</li>
                 <li><i class="material-icons">brightness_1</i> Charles Proxy (App Analitika)</li>
              </ul>
            </li>
         </ol>
        </div>

        <div class="col s12 m6 l4 writing">
         <ol>
            <li><p>PISANJE TEST SUIT-A</p>
              <ul>
                <li><i class="material-icons">brightness_1</i> Sistematika</li>
                <li><i class="material-icons">brightness_1</i> Formatiranje</li>
              </ul>
            </li>
            <li><p>ASSISTIVE</p>
              <ul>
                <li><i class="material-icons">brightness_1</i> Teorija</li>
                <li><i class="material-icons">brightness_1</i> Svrha</li>
                <li><i class="material-icons">brightness_1</i> Potreba</li>
                <li><i class="material-icons">brightness_1</i> "Know how"</li>
              </ul>
            </li>
            <li><p>KREATIVNA REŠENJA KOJIMA SE <span>POSTIŽE VISOK KVALITET TESTIRANJA I VRHUNSKO KORISNIČKO ISKUSTVO</span></p>
              <ul>
                <li><i class="material-icons">brightness_1</i> Najzanimljiviji primeri iz prakse</li>
                <li><i class="material-icons">brightness_1</i> Iskustva testera (šta gledati, gde <span>tražiti)</span></li>
              </ul>
            </li>
           </ol>
          </div>

        <div class="col s12 m6 l4">
         <ol>
            <li><p>PROGRAMSKI JEZICI</p>
              <ul>
                <li><i class="material-icons">brightness_1</i> HTML</li>
                <li><i class="material-icons">brightness_1</i> CSS</li>
                <li><i class="material-icons">brightness_1</i> JavaScript</li>
              </ul>
            </li>
            <li><p>AUTOMATSKO TESTIRANJE</p>
              <ul>
                <li><i class="material-icons">brightness_1</i> Uvod u automatsko testiranje</li>
                <li><i class="material-icons">brightness_1</i> Selenium</li>
                <li><i class="material-icons">brightness_1</i> Selenium komponente</li>
              </ul>
            </li>
            <li><p>KONKURS ZA POSAO</p>
              <ul>
                <li><i class="material-icons">brightness_1</i> Analiza CV-a</li>
                <li><i class="material-icons">brightness_1</i> Pripreme za intervju za posao</li>
              </ul>
            </li>
         </ol>
        </div>
     </div>
   </div>
</div>

<!--Course plan-->
<div class="row courseplan">
    <div class="container">
              <h2>Plan kursa:</h2>
             <div class="col s12 m6 offset-m3 center-align">
                <ul>
                  <li><p>Kurs je organizovan u dva termina sedmično po 3 časa.</p></li>
                  <li><p>Grupa od maksimalno 10 polaznika.</p></li>
                  <li><p>Termini su:</p>

                      <li><p>- Ponedeljak: 18:00h - 20:30h</p></li>
                      <li><p>- Četvrtak: 18:00h - 20:30h</p></li>

                    </li>
                  <li><p>Ukupan broj časova je 60 (1 čas = 45 minuta).</p></li>
                  <li><p>Cena kursa je 72.000 dinara.</p></li>
                </ul>
            </div>
      <div class="col s12 center-align sing-up">
            <a class="join-us-sing" href="{{url('sr/application-courses')}}" >PRIJAVI SE</a>
      </div>
    </div>
</div>

@endsection