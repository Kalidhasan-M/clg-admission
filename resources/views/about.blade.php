@include('nav')
    <div class="mb-5 ab-box1 text-center">
        @if($slider)
            <img src="{{ asset('/storage/' . $slider) }}" alt="" style="width: 100vw; height: 30vw ;">
        @endif
        <div class="terms-heading-container">
            <h4 class="terms-heading">About</h4>
        </div>
    </div>
    </div>
        <div class="ab-box2 privacybox termbox mb-10 text-left container">
            <style>
                .accordion-button {
                  
                    color: #26c6da;
                    font-weight: 500;
                    background-color: transparent;
                }
                .accordion-button:focus {
                    box-shadow: none;
                }
                .accordion-button:not(.collapsed) {
                    color: white;
                    background-color: #26c6da;
                }
             
            </style>
           <div class="container d-lg-flex justify-items-center mt-4">
            <div>
           <div class="quick-links parent-container" style=" margin-right: 20px; border: 1px solid #ccc; padding: 10px; width: 260px; position: sticky; top: 50px; background: white;">
    <h3 style="margin-bottom: -12px; margin-left: 10px; font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 550;">Quick Links</h3>
    
    <ul style="margin-top: 15px;">
        @php $i = 1; @endphp
        @foreach($terms as $indexKey => $term)
            @if(!empty($term->text) && is_array($term->text))
                @foreach($term->text as $subIndex => $item)
                    @php $loopitem = $loop->iteration; @endphp
                    @if($loopitem == 1)
                        <a href="#heading{{ $i }}" class="text-dark text-decoration-none">
                            {{ $i }}) {{ $term->title ?? '' }}
                        </a><br>
                        @php $i++; @endphp
                    @endif
                @endforeach
            @endif
        @endforeach
    </ul>
</div>
</div>

            <div class="accordion tr-coll" id="itineraryAccordion" style="flex: 3; margin-top: -40px;">
    @php $j = 0; $k=1; @endphp
    @foreach($terms as $indexKey => $term)
        <div >
            <h2 class="accordion-header" id="heading{{ $k }}">
                <h2 >
                    {{ $k }}) {{ $term->title ?? '' }}
            </h2>
            </h2>
            <div class="accordion-body">
                @if(is_array($term->text) && count($term->text) > 0)
                    @foreach($term->text as $subIndex => $item)
                        <p>{!! $item['text'] ?? '' !!}</p>
                    @endforeach
                @else
                    <p>No details available.</p>
                @endif
            </div>
        </div>
        @php $k++; @endphp
    @endforeach
</div>

        </div>
        </div>
       
       <style>
.terms-heading-container {
    text-align: center;
    margin-top: 20px;
}

.terms-heading {
    font-weight: bold;
    color: #333;
    font-size: 1.5rem;
}
@media (min-width: 768px) {
    .terms-heading {
        font-size: 25px;
    }

}
@media (min-width: 320px) {
    .terms-heading {
        font-size: 15px;
    }
}
@media (min-width: 992px) {
    .terms-heading {
        font-size: 2.5rem;
    }
}
@media (min-width: 1200px) {
    .terms-heading {
        font-size: 3rem;
    }
}
@media (max-width: 767px) {
    .quick-links {
        font-size: 0.9rem;
        width: 266px !important;
       margin-left: 10px;

    }


    .card-header h5 button {
        font-size: 1rem;
    }

    .terms-heading-container {
        padding-top: 10px;

    }

    .terms-heading {
        font-size: 1.8rem;
    }
    @media (max-width: 768px) {

}
}
.quick-links {
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 8px;
    margin-bottom: 20px;
}

.quick-links ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.quick-links li {
    margin-bottom: 10px;
}

.quick-links a {
    color: #333;
    font-size: 1rem;
    font-weight: 500;
    text-decoration: none;
}
.collapse.show {
  display: block;
  margin-top: -65px;
}
.collapse.show {
  display: block;
  margin-top: -65px;
}
.quick-links a:hover {
    color: #007bff;
    text-decoration: underline;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll(".quick-links a");
    const sections = document.querySelectorAll(".term-section");
    links.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            sections.forEach(section => {
                section.classList.remove("show");
            });
            const targetId = this.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.classList.add("show");
                targetSection.scrollIntoView({ behavior: "smooth" });
            }
        });
    });
});
// window.addEventListener('scroll', function () {
//     var quickLinks = document.querySelector('.quick-links');
//     var accordion = document.getElementById('accordion');
//     var offsetTop = 10;
//     var footer = document.querySelector('footer');
//     var isMobile = window.innerWidth <= 768;
//     if (!isMobile) {
//         var quickLinksTop = quickLinks.parentElement.getBoundingClientRect().top;
//         var footerTop = footer.getBoundingClientRect().top;
//         if (quickLinksTop <= offsetTop && footerTop > quickLinks.offsetHeight) {
//             quickLinks.style.position = 'fixed';
//             quickLinks.style.top = offsetTop + 'px';
//             quickLinks.style.marginRight = '20px';
//             accordion.style.marginLeft = '310px';
//         } else if (footerTop <= quickLinks.offsetHeight) {
//             quickLinks.style.position = 'absolute';
//             quickLinks.style.top = footerTop - quickLinks.offsetHeight + 'px';
//             quickLinks.style.marginRight = '20px';
//             accordion.style.marginLeft = '0';
//         } else {
//             quickLinks.style.position = 'relative';
//             quickLinks.style.top = 'initial';
//             quickLinks.style.marginRight = '20px';
//             accordion.style.marginLeft = '0';
//         }
//     } else {
//         quickLinks.style.position = 'relative';
//         quickLinks.style.top = 'initial';
//         quickLinks.style.marginRight = '20px';
//         accordion.style.marginLeft = '0';
//     }
// });

</script>

 @include('footer')