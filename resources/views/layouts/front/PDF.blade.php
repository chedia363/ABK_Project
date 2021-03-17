  <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
<style>
* {
  margin: 0;
  padding: 0;
}

.top-bar {
  background: #333;
  color: #fff;
  padding: 1rem;
}

.btn {
  background: coral;
  color: #fff;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 0.7rem 2rem;
}

.btn:hover {
  opacity: 0.9;
}

.page-info {
  margin-left: 1rem;
}

.error {
  background: orangered;
  color: #fff;
  padding: 1rem;
}

</style>
    <section id="faq" class="faq section-padding" style="margin-top:5rem; background:#e6e6e6;">
      <div class="container" data-aos="fade-up">
      <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>@lang('front.Policies and procedural guides')</h2>
                    </div>
                </div>
            </div>
        <ul class="faq-list" data-aos="fade-up">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">@lang('front.A regulation for appointing the board of directors')<span class="icon-show lnr lnr-chevron-left"></span><span class="icon-close lnr lnr-chevron-down"></span></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
                <div class='embed-responsive' style='padding-bottom:150%' >
                <div class="top-bar">
      <button class="btn" id="prev-page">
        <i class="fas fa-arrow-circle-left"></i> Prev Page
      </button>
      <button class="btn" id="next-page">
        Next Page <i class="fas fa-arrow-circle-right"></i>
      </button>
      <span class="page-info">
        Page <span id="page-num"></span> of <span id="page-count"></span>
      </span>
    </div>
                <canvas id="pdf-render"></canvas>                </div>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">@lang('front.Executive Director Appointment Regulations') <span class="icon-show lnr lnr-chevron-left"></span><span class="icon-close lnr lnr-chevron-down"></span></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
            <div class='embed-responsive' style='padding-bottom:150%' >
            <div class="top-bar">
      <button class="btn" id="prev-page">
        <i class="fas fa-arrow-circle-left"></i> Prev Page
      </button>
      <button class="btn" id="next-page">
        Next Page <i class="fas fa-arrow-circle-right"></i>
      </button>
      <span class="page-info">
        Page <span id="page-num"></span> of <span id="page-count"></span>
      </span>
    </div>
                <canvas id="pdf-render"></canvas>                </div>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">@lang('front.List of Chartered Accountant nomenclature') <span class="icon-show lnr lnr-chevron-left"></span><span class="icon-close lnr lnr-chevron-down"></span></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
            <div class='embed-responsive' style='padding-bottom:150%' >
            <div class="top-bar">
      <button class="btn" id="prev-page">
        <i class="fas fa-arrow-circle-left"></i> Prev Page
      </button>
      <button class="btn" id="next-page">
        Next Page <i class="fas fa-arrow-circle-right"></i>
      </button>
      <span class="page-info">
        Page <span id="page-num"></span> of <span id="page-count"></span>
      </span>
    </div>
                <canvas id="pdf-render"></canvas>                </div>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">@lang('front.Regulations for the election of the General Assembly')<span class="icon-show lnr lnr-chevron-left"></span><span class="icon-close lnr lnr-chevron-down"></span></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
            <div class='embed-responsive' style='padding-bottom:150%' >
            <div class="top-bar">
      <button class="btn" id="prev-page">
        <i class="fas fa-arrow-circle-left"></i> Prev Page
      </button>
      <button class="btn" id="next-page">
        Next Page <i class="fas fa-arrow-circle-right"></i>
      </button>
      <span class="page-info">
        Page <span id="page-num"></span> of <span id="page-count"></span>
      </span>
    </div>
                <canvas id="pdf-render"></canvas>

                </div>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">@lang('front.Committee call list') <span class="icon-show lnr lnr-chevron-left"></span><span class="icon-close lnr lnr-chevron-down"></span></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
            <div class='embed-responsive' style='padding-bottom:150%' >
            <div class="top-bar">
      <button class="btn" id="prev-page">
        <i class="fas fa-arrow-circle-left"></i> Prev Page
      </button>
      <button class="btn" id="next-page">
        Next Page <i class="fas fa-arrow-circle-right"></i>
      </button>
      <span class="page-info">
        Page <span id="page-num"></span> of <span id="page-count"></span>
      </span>
    </div>
                <canvas id="pdf-render"></canvas>
                </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script>
    const url = '../img/6.pdf';

let pdfDoc = null,
  pageNum = 1,
  pageIsRendering = false,
  pageNumIsPending = null;

const scale = 1.5,
  canvas = document.querySelector('#pdf-render'),
  ctx = canvas.getContext('2d');

// Render the page
const renderPage = num => {
  pageIsRendering = true;

  // Get page
  pdfDoc.getPage(num).then(page => {
    // Set scale
    const viewport = page.getViewport({ scale });
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    const renderCtx = {
      canvasContext: ctx,
      viewport
    };

    page.render(renderCtx).promise.then(() => {
      pageIsRendering = false;

      if (pageNumIsPending !== null) {
        renderPage(pageNumIsPending);
        pageNumIsPending = null;
      }
    });

    // Output current page
    document.querySelector('#page-num').textContent = num;
  });
};

// Check for pages rendering
const queueRenderPage = num => {
  if (pageIsRendering) {
    pageNumIsPending = num;
  } else {
    renderPage(num);
  }
};

// Show Prev Page
const showPrevPage = () => {
  if (pageNum <= 1) {
    return;
  }
  pageNum--;
  queueRenderPage(pageNum);
};

// Show Next Page
const showNextPage = () => {
  if (pageNum >= pdfDoc.numPages) {
    return;
  }
  pageNum++;
  queueRenderPage(pageNum);
};

// Get Document
pdfjsLib
  .getDocument(url)
  .promise.then(pdfDoc_ => {
    pdfDoc = pdfDoc_;

    document.querySelector('#page-count').textContent = pdfDoc.numPages;

    renderPage(pageNum);
  })
  .catch(err => {
    // Display error
    const div = document.createElement('div');
    div.className = 'error';
    div.appendChild(document.createTextNode(err.message));
    document.querySelector('body').insertBefore(div, canvas);
    // Remove top bar
    document.querySelector('.top-bar').style.display = 'none';
  });

// Button Events
document.querySelector('#prev-page').addEventListener('click', showPrevPage);
document.querySelector('#next-page').addEventListener('click', showNextPage);
document.addEventListener("contextmenu", function(e){
  e.preventDefault();
}, false);
</script>