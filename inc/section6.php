
      <!-- Progress Bars and FAQ Section in a grid -->
       <div style="background-color: #F5F5F5;">
      <section class="grid grid-cols-1 md:grid-cols-2 gap-8 py-24 mx-auto w-[90%] md:w-[80%]" >
        

<!-- Progress Bars -->
<div>
<p class="text-2xl font-semibold leading-relaxed primary-color pt-5 pb-3">OUR FAQ</p>
    <h2 class="text-5xl font-bold dark-color  pb-4">Why People Are Choose Us For Textile Work</h2>
    <div class="space-y-4 pt-10">
        <div>
            <p class="flex justify-between text-lg font-bold text-gray-700 pb-2">Custom Tailoring <span>90%</span></p>
            <div class="bg-white h-4 rounded-full overflow-hidden">
                <div class="bg-orange-500 h-full" style="width: 90%;"></div>
            </div>
        </div>
        <div>
            <p class="flex justify-between text-lg font-bold text-gray-700 pb-2">Hemming Shortening <span>70%</span></p>
            <div class="bg-white h-4 rounded-full overflow-hidden">
                <div class="bg-orange-500 h-full" style="width: 70%;"></div>
            </div>
        </div>
        <div>
            <p class="flex justify-between text-lg font-bold text-gray-700 pb-2">Home Textiles <span>50%</span></p>
            <div class="bg-white h-4 rounded-full overflow-hidden">
                <div class="bg-orange-500 h-full" style="width: 50%;"></div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="pt-10">
    <div class="accordion-item bg-white mb-5" style="box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;">
        <div class="accordion-header flex justify-between items-center p-4  bg-gray-700 text-white">
            <span class="font-semibold text-xl">01 What Is Main Problems Faced Textile Industry ?</span>
        </div>
        <div class="accordion-content px-4 py-2  border border:gray-100 dark:border-gray-200" style="max-height: none;">
            <p class="text-gray-600 py-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
    </div>
    <div class="accordion-item bg-white mb-5" style="box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;">
        <div class="accordion-header flex justify-between items-center p-4" onclick="toggleAccordion(this)">
            <span class="font-semibold text-xl">02 What Is The Importance Of Textile Industry?</span>
            <span class="accordion-icon text-2xl font-bold">+</span>
        </div>
        <div class="accordion-content max-h-0 overflow-hidden px-4 pt-2 " >
            <p class="text-gray-600 py-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
    </div>
    <div class="accordion-item bg-white mb-5" style="box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;">
        <div class="accordion-header flex justify-between items-center p-4" onclick="toggleAccordion(this)">
            <span class="font-semibold text-xl">03 What Is The Demand For Textile Industry?</span>
            <span class="accordion-icon text-2xl font-bold">+</span>
        </div>
        <div class="accordion-content max-h-0 overflow-hidden px-4 pt-2 " >
            <p class="text-gray-600 py-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
    </div>
    <div class="accordion-item bg-white mb-5" style="box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 5px;">
        <div class="accordion-header flex justify-between items-center p-4" onclick="toggleAccordion(this)">
            <span class="font-semibold text-xl">04 How Can India Improve Textile Industry?</span>
            <span class="accordion-icon text-2xl font-bold">+</span>
        </div>
        <div class="accordion-content max-h-0 overflow-hidden px-4 pt-2 " >
            <p class="text-gray-600 py-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        </div>
    </div>
</div>

</section>
</div>


<script>
  function toggleAccordion(element) {
        const content = element.nextElementSibling;
        const icon = element.querySelector('.accordion-icon');
        const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

        if (isOpen) {
            content.style.maxHeight = '0px';
            icon.textContent = '+';
            element.classList.remove('bg-gray-700', 'text-white');
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.textContent = '-';
            element.classList.add('bg-gray-700', 'text-white');
        }
    }
</script>


