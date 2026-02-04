# Creative Faces
## "Youth Empowerment Through Makeup Artistry"

### Pre-requisite Agreement
1. I agree to bring my own freestanding tabletop mirror to participate in this training (Yes/No)

---

### Personal Information

2. First Name
3. Middle Name
4. Last Name
5. Address Line 1 (Street Number and Complete Street)
6. Address Line 2 (Area (E.g. Cove))
7. Gender (Male/Female)
8. Email Address
9. Contact Number
10. Alternative Contact Number
11. Date of Birth
12. Which area do you live in?
13. Nationality
14. Birth Certificate Pin Number
15. National Identification Card or Trinidad and Tobago Passport (File upload - color image or PDF, file size should not be more than 2MB)

---

### Education & Skills Background

16. Highest Level of Education (Completed)
17. Employment Status
    - Employed full time
    - Employed part time
    - Self-Employed/Business Owner
    - Both Employed and Business Owner
    - Student
    - Unemployed

---

### Programme Interest

**Course Schedule:**

| Cohort | Date | Time | Venue |
|--------|------|------|-------|
| 1 | Tuesday 14th October & Thursday 16th October 2025 | 3:00pm - 6:00pm | Los Bajos Youth Development Centre |
| 2 | Wednesday 15th October & Wednesday 22nd October 2025 | 3:00pm - 6:00pm | St James Youth Development Centre |
| 3 | Tuesday 21st October & Thursday 23rd October 2025 | 3:00pm - 6:00pm | California Youth Development Centre |

18. I am interested in attending this course:
    - Cohort 1: Tuesday 14th and Thursday 16th October 2025 at Los Bajos Youth Development Centre
    - Cohort 2: Wednesday 15th October & Wednesday 22nd October 2025 at St James Youth Development Centre
    - Cohort 3: Tuesday 21st and Thursday 23rd October 2025 at California Youth Development Centre

19. Are you able to attend all scheduled sessions of the course? (Yes/No)
20. Do you have any experience in make up? (Yes/No)
21. How do you see this course contribution to your future plans? (Text area)
22. How did you find out about the programme? (Dropdown)

---

### Consent to Service Terms and Conditions

23. I consent to be contacted by the Ministry of Sport and Youth Affairs Monitoring & Evaluation Unit up to two (2) years after programme completion for tracer studies. (Yes/No)
24. Would you like to subscribe to the Ministry's mailing list for updates on upcoming projects and programmes? (Yes/No)
25. I agree to have my photographs or images used by the MSYA for promotion on all media pages. (Yes/No)

---

### NOTE

*I hereby declare that the information given in this application is true and correct to the best of my knowledge and belief. If any information given in this application proves to be false or incorrect, I accept the consequences of automatic rejection of the submission and that I may be liable for any breach of the applicable Laws of the Republic of Trinidad and Tobago.*

26. I have read and accepted the above (Yes/No)

---

## Field ID Mapping

| Question # | Question | Field ID |
|------------|----------|----------|
| 1 | I agree to bring my own freestanding tabletop mirror | `APL_Will_Bring_Mirror` |
| 2 | First Name | `APL_FName` |
| 3 | Middle Name | `APL_MName` |
| 4 | Last Name | `APL_LName` |
| 5 | Address Line 1 | `APL_Address_1` |
| 6 | Address Line 2 (Area) | `APL_Area` |
| 7 | Gender | `APL_Gender` |
| 8 | Email Address | `APL_Email` |
| 9 | Contact Number | `APL_PPhone` |
| 10 | Alternative Contact Number | `APL_APhone` |
| 11 | Date of Birth | `APL_DOB` |
| 12 | Which area do you live in? | `APL_Area` (duplicate of #6?) |
| 13 | Nationality | `APL_Nationality` |
| 14 | Birth Certificate Pin Number | `APL_BIRTH_PIN` |
| 15 | National ID Card/Passport (File upload) | `APL_ID_TYP` + `APL_ID_Number` |
| 16 | Highest Level of Education | `APL_HLOE` |
| 17 | Employment Status | `APL_Employment_Status` |
| 18 | I am interested in attending this course (Cohort) | `APL_Programme` |
| 19 | Are you able to attend all scheduled sessions? | `APL_Attend` |
| 20 | Do you have any experience in make up? | `APL_Experience` or `APL_Num_Experience_Years` |
| 21 | How do you see this course contribution to your future plans? | `APL_Future_Plans` |
| 22 | How did you find out about the programme? | `APL_How_Found_Programme` |
| 23 | Consent to be contacted for tracer studies | `APL_Consent_Followup` or `APL_Contact_Consent` |
| 24 | Subscribe to Ministry's mailing list | `APL_Subscribe_Mailing` or `APL_Subscribe` |
| 25 | Photo/image consent for MSYA | `APL_Photo_Consent` |
| 26 | I have read and accepted the above | `APL_Accepts` |

---

## Issues / Mismatches Found

1. **Address Line 2 vs Area**: The form has "Address Line 2" but seeder has `APL_Address_3` (no `APL_Address_2`). Question #6 and #12 both seem to map to `APL_Area` - possible duplicate?

2. **File Upload Missing**: Question #15 requires a file upload for National ID/Passport, but there's no file upload field in the seeder - only `APL_ID_TYP` and `APL_ID_Number` for text input.

3. **Makeup Experience Yes/No**: Question #20 asks "Do you have any experience in make up?" (Yes/No), but `APL_Experience` is a Textarea for describing experience. May need a separate Yes/No field.

4. **Duplicate Subscribe Fields**: Seeder has both `APL_Subscribe_Mailing` and `APL_Subscribe` - unclear which to use.

5. **Duplicate Consent Fields**: Seeder has both `APL_Consent_Followup` and `APL_Contact_Consent` - unclear which maps to question #23.

---

## Simple ID List

```
APL_Will_Bring_Mirror
APL_FName
APL_MName
APL_LName
APL_Address_1
APL_Area
APL_Gender
APL_Email
APL_PPhone
APL_APhone
APL_DOB
APL_Nationality
APL_BIRTH_PIN
APL_ID_TYP
APL_ID_Number
APL_HLOE
APL_Employment_Status
APL_Programme
APL_Attend
APL_Experience
APL_Future_Plans
APL_How_Found_Programme
APL_Consent_Followup
APL_Subscribe_Mailing
APL_Photo_Consent
APL_Accepts
```
