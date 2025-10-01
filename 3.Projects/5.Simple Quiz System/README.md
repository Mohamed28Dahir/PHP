## Simple Quiz System (Somali)

Professional multiple-choice and mixed-type quiz application focused on Somali content. Built with PHP (for scoring) and Tailwind CSS (for UI), with clean separation of HTML and CSS.

### Features
- **Somali Question Bank**: Curated questions about Somalia, written in Somali.
- **Mixed Question Types**:
  - Multiple Choice (MCQ)
  - True/False (Run/Been)
  - Short Answer (text, case-insensitive, alias support)
  - Number (exact numeric match)
- **Auto Scoring (Pure PHP)**:
  - Calculates total correct answers and percentage
  - Normalizes inputs for short answers and booleans
  - Clear pass/fail status with a configurable threshold (default 60%)
- **Detailed Feedback**:
  - Per-question correctness indicators
  - Correct answer and brief explanation after submission
- **Modern UI**:
  - Tailwind-styled, responsive layout
  - Progress bar, cards, and subtle visual states
  - Inter font and refined spacing
- **Accessibility & UX**:
  - Semantic form controls
  - Large tap targets and focus states

### Structure
- `index.php`: Main quiz page, question definitions, rendering, and scoring.
- `assets/styles.css`: Small custom stylesheet layered on Tailwind for polish.

### Question Examples
- **MCQ**: "Caasimadda Soomaaliya waa?"
- **True/False**: "Shilin Soomaali waa lacagta rasmiga ah ee Soomaaliya."
- **Short**: "Qor magaca caasimadda Soomaaliya (hal eray)."
- **Number**: "Qor tirada: 234"

### Scoring & Rules
- Total score equals the count of correct responses.
- Percentage is computed from total correct over total questions.
- Pass/fail is determined by the threshold set in the code.
- Short answers are case-insensitive and may include accepted aliases.

### Customization
- Add, remove, or edit questions by updating the `$questions` array in `index.php`.
- Change the pass threshold by modifying the `$passThresholdPercent` value.
- Adjust visual styles via Tailwind utility classes or `assets/styles.css`.


