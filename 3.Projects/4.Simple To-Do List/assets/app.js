// Theme toggle
document.getElementById('themeToggle')?.addEventListener('click', function () {
    var isDark = document.documentElement.classList.toggle('dark');
    try { localStorage.setItem('theme', isDark ? 'dark' : 'light'); } catch (e) {}
});

// Drag & Drop reorder
(function () {
    var list = document.getElementById('taskList');
    if (!list) return;

    var dragEl = null;

    list.addEventListener('dragstart', function (e) {
        var target = e.target;
        if (!(target instanceof HTMLElement)) return;
        if (!target.matches('li.task-row')) return;
        dragEl = target;
        e.dataTransfer && (e.dataTransfer.effectAllowed = 'move');
        setTimeout(function(){ target.classList.add('opacity-60'); }, 0);
    });

    list.addEventListener('dragend', function (e) {
        var target = e.target;
        if (target instanceof HTMLElement) target.classList.remove('opacity-60');
        dragEl = null;
        persistOrder();
    });

    list.addEventListener('dragover', function (e) {
        e.preventDefault();
        var afterEl = getDragAfterElement(list, e.clientY);
        if (afterEl == null) {
            dragEl && list.appendChild(dragEl);
        } else {
            dragEl && list.insertBefore(dragEl, afterEl);
        }
    });

    function getDragAfterElement(container, y) {
        var draggableElements = [].slice.call(container.querySelectorAll('li.task-row:not(.opacity-60)'));
        return draggableElements.reduce(function (closest, child) {
            var box = child.getBoundingClientRect();
            var offset = y - box.top - box.height / 2;
            if (offset < 0 && offset > closest.offset) {
                return { offset: offset, element: child };
            } else {
                return closest;
            }
        }, { offset: Number.NEGATIVE_INFINITY, element: null }).element;
    }

    function persistOrder() {
        var ids = [].map.call(list.querySelectorAll('li.task-row'), function (li) { return li.getAttribute('data-id'); });
        var form = new FormData();
        form.append('action', 'reorder');
        form.append('order', ids.join(','));
        fetch(location.href, { method: 'POST', body: form, credentials: 'same-origin' })
            .then(function (r) { return r.json(); })
            .then(function () { /* no refresh needed */ })
            .catch(function () { /* ignore */ });
    }
})();


