<div class="m-4 shadow-sm">
<form action="" method="post" class="m-auto">
    <div class="border border-slate-200 rounded-lg px-4 py-2 
    focus:border-slate-400 focus:shadow-md focus:outline-none" >
        <select name="object" id="object" class="bg-transparent text-slate-800 w-full">
            <option value="Collaboration">Collaboration</option>
            <option value="Formation">Formation</option>
            <option value="Devis graduit">Devis graduit</option>
            <option value="Autre">Autre...</option>
        </select>
    </div>
    <div class="flex gap-4 my-4">
        <div class="flex flex-col gap-2">
            <label for="firstname" class="font-semibold text-lg">Firstname</label>
            <input type="text" name="firstname" id="firstname" 
            placeholder="Martin" value="Martine" 
            minlength="2" maxlength="80" required 
            class="border border-slate-200 rounded-lg px-4 py-2 
            focus:border-slate-400 focus:shadow-md focus:outline-none">
        </div>
        <div class="flex flex-col gap-2">
            <label for="lastname" class="font-semibold text-lg">Lastname</label>
            <input type="text" name="lastname" id="lastname" 
            placeholder="Dupont" value="Dupont" 
            minlength="2" maxlength="80" required 
            class="border border-slate-200 rounded-lg px-4 py-2 
            focus:border-slate-400 focus:shadow-md focus:outline-none">
        </div>
    </div>
    <div class="flex gap-4 my-4">
        <div class="flex flex-col gap-2">
            <label for="email" class="font-semibold text-lg">E-mail</label>
            <input type="email" name="email" id="email" 
            placeholder="email@.com" value="Martin@gmail.com" required 
            class="border border-slate-200 rounded-lg px-4 py-2 
            focus:border-slate-400 focus:shadow-md focus:outline-none">
        </div>
        <div class="flex flex-col gap-2">
            <label for="phone" class="font-semibold text-lg">Teléphone</label>
            <input type="tel" name="phone" id="phone" 
            placeholder="06 54 78 95 12" value="07 21 52 62 02" minlength="10" maxlength="14" 
            class="border border-slate-200 rounded-lg
            px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none">
        </div>
    </div>
        <div class="flex flex-col gap-2 mt-2">
            <label for="message" class="font-semibold text-lg">Message</label>
            <textarea type="text" name="message" id="message" placeholder="Message..." required 
            rows="10" class="border border-slate-200 rounded-lg px-4 py-2 
            focus:border-slate-400 focus:shadow-md focus:outline-none">Bonjour tout le monde</textarea>
        </div>
        <button type="submit" class="bg-white text-slate-800 rounded-lg
        shadow-md p-2 mt-4 hover:text-white hover:bg-slate-800 w-40">
            Envoyer
        </button>
</form>
</div>