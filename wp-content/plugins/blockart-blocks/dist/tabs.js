(()=>{const{$$:t,domReady:s,toArray:a,each:c,on:i}=window.blockartUtils;s((()=>{const s=a(t(".blockart-tabs"));s.length&&c(s,(t=>{i("click",t,(s=>{s.preventDefault();let a=s.target;a=a?.classList.contains("blockart-tabs-trigger")?a:a?.closest(".blockart-tabs-trigger");const c=a.dataset.tab,i=[...t.children].filter((t=>t.classList.contains("blockart-tab"))),e=i.find((t=>t.classList.contains(`blockart-tab-${c}`)));if(e){const s=i.find((t=>t.classList.contains("is-active"))),c=t.querySelector(".is-active");s&&c&&(s.classList.remove("is-active"),c.classList.remove("is-active")),a.classList.add("is-active"),e.classList.add("is-active")}}))}))}))})();